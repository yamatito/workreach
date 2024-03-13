<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

// Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

use Illuminate\Support\Facades\File; // この行を追加

Route::get('/area-job/{prefecture}/{jobType}.html', function ($prefecture, $jobType) {
    $path = resource_path("views/area-job/{$prefecture}/{$jobType}.html");
    if (!File::exists($path)) {
        abort(404); 
    }
    $content = File::get($path); 
    return response($content)->header('Content-Type', 'text/html'); 
})->where(['prefecture' => '[ぁ-んァ-ヶa-zA-Z]+', 'jobType' => '[ぁ-んァ-ヶa-zA-Z]+']);


// Route::get('html', function () {
//     $path = resource_path('views/area-job/愛知/アイファルマ.html');
//     return response()->file($path);
// })->name('admin');




Route::get('admin', function () {
    return view('welcome');
})->name('admin'); 

Route::get('company', function () {
    return view('HTML.company');
})->name('company'); 

Route::get('policy', function () {
    return view('HTML.policy');
})->name('policy'); 

Route::get('contact', function () {
    return view('HTML.process');
})->name('contact'); 


Route::post('/contact/send', [ContactController::class, 'send'])->name('send');


Route::get('/job/{article}', [ArticleController::class, 'show'])->name('job.show');
Route::get('/', [ArticleController::class, 'index'])->name('job.index');

Route::get('/search', [ArticleController::class, 'search'])->name('job.search');


Route::get('/index.html', [ArticleController::class, 'index'])->name('job.index');

Route::get('/policy.html', function () {
    return view('HTML.policy');
})->name('policy'); 

Route::get('company.html', function () {
    return view('HTML.company');
})->name('company'); 



Route::get('/test/{article}', [ArticleController::class, 'testshow'])->name('test.show');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/articles', ArticleController::class);
    Route::get('/articles', [ArticleController::class, 'adminindex'])->name('articles.adminindex');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    // Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/{article}', [ArticleController::class, 'adminshow'])->name('articles.adminshow');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::patch('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::post('/articles/{article}/activate',  [ArticleController::class, 'activate'])->name('articles.activate');

    Route::get('register', function () {
        return view('auth.register');
    })->name('register'); 
    

    // Route::post('/articles/{article}/bookmark', [BookmarkController::class, 'store'])->name('bookmark.store');
    // Route::delete('/articles/{article}/unbookmark', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');/
    // Route::get('/bookmarks', [ArticleController::class, 'bookmark_articles'])->name('bookmarks');
});
// });
// 下記が一行で？！
// リソースルート
