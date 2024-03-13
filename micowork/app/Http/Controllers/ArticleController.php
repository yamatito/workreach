<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Pagination\LengthAwarePaginator;


class ArticleController extends Controller
{
    public function index()
    {
        // Articleモデルからデータを取得
        $articles = Article::where('status', true)
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        // XMLファイルのパス
        $xmlPath = storage_path('xml/data.xml');

        // XMLファイルの読み込み
        $xmlString = File::get($xmlPath);
        $xml = simplexml_load_string($xmlString);

        // ビューに渡すデータ
        $data = [
            'articles' => $articles, // Articleモデルからのデータ
            'xmlArticles' => $xml->job // XMLファイルからのデータ
        ];

        return view('HTML.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminindex(Request $request)
    {
        $order = $request->input('order', 'newest'); // デフォルトは最新順

        $query = Article::query();

        switch ($order) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'status_unset':
                // statusがfalseのみを選択して表示
                $query->where('status', 0)->orderBy('created_at', 'desc');
                break;

            default:
                // 最新順
                $query->orderBy('created_at', 'desc');
                break;
        }

        $articles = $query->paginate(10);
        $data = [
            'articles' => $articles,
            'order' => $order, // 現在の並び順をビューに渡す
        ];
        return view('articles.index', $data);
    }


    public function search(Request $request)
    {
        $query = Article::query();
    
        if ($request->filled('area')) {
            $area = str_replace('県', '', $request->area);
            $searchAreas = [$request->area, $area . '県', $area . '都', $area . '府', $area . '道'];
            $query->where(function ($q) use ($searchAreas) {
                foreach ($searchAreas as $area) {
                    $q->orWhere('area', 'like', '%' . $area . '%');
                }
            });
        }
    
        if ($request->filled('job_title')) {
            $query->where('job_title', 'like', '%' . $request->job_title . '%');
        }
    
        if ($request->filled('employment_type')) {
            $query->where('employment_type', $request->employment_type);
        }
    
        if ($request->filled('keyword')) {
            $query->where(function ($q) use ($request) {
                $q->where('company_name', 'like', '%' . $request->keyword . '%')
                    ->orWhere('job_description', 'like', '%' . $request->keyword . '%')
                    ->orWhere('address', 'like', '%' . $request->keyword . '%');
            });
        }
    
        $articles = $query->where('status', true)->orderBy('created_at', 'desc')->simplePaginate(10);
    
        // XMLファイルの読み込みとフィルタリング
        $xmlPath = storage_path('xml/data.xml');
        $xmlString = File::get($xmlPath);
        $xml = simplexml_load_string($xmlString);
    
        $filteredXmlJobs = [];
        $areaBase = $request->filled('area') ? str_replace(['県', '都', '府', '道'], '', $request->area) : '';
    
        foreach ($xml->job as $job) {
            $matchesArea = true;
            if ($request->filled('area')) {
                $matchesArea = stripos($job->area, $request->area) !== false || stripos($job->area, $areaBase) !== false;
            }
            $matchesJobTitle = $request->filled('job_title') ? stripos($job->title, $request->job_title) !== false : true;
            $matchesEmploymentType = $request->filled('employment_type') ? stripos($job->employmentType, $request->employment_type) !== false : true;
            $matchesKeyword = $request->filled('keyword') ? (stripos($job->search, $request->keyword) !== false || stripos($job->description, $request->keyword) !== false) : true;
    
            if ($matchesArea && $matchesJobTitle && $matchesEmploymentType && $matchesKeyword) {
                $filteredXmlJobs[] = $job;
            }
        }

        // ページネーション用のコレクションを作成
        // $filteredXmlJobsCollection = collect($filteredXmlJobs);
    // フィルタリング後のXMLジョブをシャッフル
$filteredXmlJobsCollection = collect($filteredXmlJobs)->shuffle();

        $page = $request->input('page', 1);
        $perPage = 10; // XMLのページネーション設定
        $currentPageItems = $filteredXmlJobsCollection->slice(($page - 1) * $perPage, $perPage)->values()->all();
        $paginatedXmlJobs = new LengthAwarePaginator($currentPageItems, count($filteredXmlJobsCollection), $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);
    
        $data = [
            'articles' => $articles,
            'xmlArticles' => $paginatedXmlJobs,
        ];
    
        return view('job.search', $data);
    }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        $data = ['article' => $article];
        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:255', // 必須
            'area' => 'required|string|max:255', // 必須
            'address' => 'nullable|string|max:255',
            'work_location' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'job_title_description' => 'nullable|string|max:255',
            'access' => 'nullable|string',
            'employment_type' => 'nullable|string|max:255',
            'job_description' => 'nullable|string',
            'salary' => 'nullable|string',
            'working_hours' => 'nullable|string|max:255',
            'recruitment_conditions' => 'nullable|string',
            'holidays' => 'nullable|string',
            'application_method' => 'nullable|string',
            'interview_location' => 'nullable|string|max:255',
            'receptionist' => 'nullable|string|max:255',
            'application_contact' => 'nullable|string|max:255',
            'treatment' => 'nullable|string',
            'image_path' => 'nullable|image|max:10240',
            'status' => 'nullable|boolean', // boolean、null可
        ]);
        $article = new Article();
        $article->company_name = $request->company_name;
        $article->area = $request->area;
        $article->address = $request->address;
        $article->work_location = $request->work_location;
        $article->job_title = $request->job_title;
        $article->job_title_description = $request->job_title_description;
        $article->access = $request->access;
        $article->employment_type = $request->employment_type;
        $article->job_description = $request->job_description;
        $article->salary = $request->salary;
        $article->working_hours = $request->working_hours;
        $article->recruitment_conditions = $request->recruitment_conditions;
        $article->holidays = $request->holidays;
        $article->application_method = $request->application_method;
        $article->treatment = $request->treatment;
        $article->interview_location = $request->interview_location;
        $article->receptionist = $request->receptionist;
        $article->application_contact = $request->application_contact;

        if ($request->hasFile('new_image')) {
            // 新しい画像がアップロードされた場合の処理
            $file = $request->file('new_image');
            $date = Carbon::now()->format('Ymd');
            $fileName = $file->getClientOriginalName();
            $imageName = $date . '_' . $fileName;
            // 保存先のパスを設定
            $destinationPath = public_path('images/articlesImg');
            $file->move($destinationPath, $imageName);
            $article->image_path = $imageName; // データベースに保存するパスを修正
        } else {
            $article->image_path = $request->image_path;
        }
        // $article->image_path = $request->image_path;

        $article->status = $request->status;

        $article->save();


        return redirect(route('articles.adminindex'))->with('success', '記事が正常に作成されました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function adminshow(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.adminshow', $data);
    }

    public function testshow(Article $article)
    {
        $data = ['article' => $article];
        return view('test.show', $data);
    }

    public function show(Article $article)
    {
        if (!$article->status) {
            return redirect('/')->with('error', '指定された記事は見つかりません。');
        }
        $data = ['article' => $article];
        return view('job.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:255', // 必須
            'area' => 'required|string|max:255', // 必須
            'address' => 'nullable|string|max:255',
            'work_location' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'job_title_description' => 'nullable|string|max:255',
            'access' => 'nullable|string',
            'employment_type' => 'nullable|string|max:255',
            'job_description' => 'nullable|string',
            'salary' => 'nullable|string',
            'working_hours' => 'nullable|string|max:255',
            'recruitment_conditions' => 'nullable|string',
            'holidays' => 'nullable|string',
            'application_method' => 'nullable|string',
            'interview_location' => 'nullable|string|max:255',
            'receptionist' => 'nullable|string|max:255',
            'application_contact' => 'nullable|string|max:255',
            'treatment' => 'nullable|string',
            'image_path' => 'nullable|image|max:10240',
            'new_image' => 'nullable|image|max:10240', // ここを修正
            'status' => 'nullable|boolean', // boolean、null可
        ]);

        $article->company_name = $request->company_name;
        $article->area = $request->area;
        $article->address = $request->address;
        $article->work_location = $request->work_location;
        $article->job_title = $request->job_title;
        $article->job_title_description = $request->job_title_description;
        $article->access = $request->access;
        $article->employment_type = $request->employment_type;
        $article->job_description = $request->job_description;
        $article->salary = $request->salary;
        $article->working_hours = $request->working_hours;
        $article->recruitment_conditions = $request->recruitment_conditions;
        $article->holidays = $request->holidays;
        $article->application_method = $request->application_method;
        $article->treatment = $request->treatment;
        $article->interview_location = $request->interview_location;
        $article->receptionist = $request->receptionist;
        $article->application_contact = $request->application_contact;



        // 新しい画像がアップロードされた場合の処理
        if ($request->hasFile('new_image')) {
            $file = $request->file('new_image');
            $date = Carbon::now()->format('Ymd');
            $fileName = $file->getClientOriginalName();
            $imageName = $date . '_' . $fileName;
            // 保存先のパスを設定
            $destinationPath = public_path('images/articlesImg');
            $file->move($destinationPath, $imageName);
            $article->image_path = $imageName; // データベースに保存するパスを修正
        } else {
            // 変更がない場合、隠しフィールドから既存の画像名を取得
            $article->image_path = $request->input('previous_image');
        }


        $article->status = $request->status;

        $article->save();
        return redirect(route('articles.adminshow', $article));
    }


    public function activate(Request $request, Article $article)
    {
        $article->status = true; // statusを有効にする
        $article->save(); // 変更を保存

        return back()->with('success', '記事のステータスを有効にしました。');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.adminindex'));
    }
}
