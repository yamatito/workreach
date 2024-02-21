// ドロップダウンメニューを表示する関数
function showDropdownMenu() {
  var dropdownMenu = this.nextElementSibling;
  dropdownMenu.style.display = 'block';

  // メニュー内にマウスがある間はメニューを表示し続ける
  dropdownMenu.addEventListener('mouseenter', function() {
      dropdownMenu.style.display = 'block';
  });

  // メニュー内からマウスが離れたらメニューを非表示にする
  dropdownMenu.addEventListener('mouseleave', function() {
      dropdownMenu.style.display = 'none';
  });
}

// ドロップダウンメニューを非表示にする関数
function hideDropdownMenu() {
  var dropdownMenu = this.nextElementSibling;
  dropdownMenu.style.display = 'none';
}

// ドロップダウンメニューを表示するイベントを設定
var dropdownButtons = document.querySelectorAll('.nav-button');
dropdownButtons.forEach(function(button) {
  button.addEventListener('mouseenter', showDropdownMenu);
  button.addEventListener('mouseleave', hideDropdownMenu);
});








  /*スライダ(おすすめ求人)ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー*/
  $(document).ready(function() {
    $('.slider-track').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        dots: true, // ドットのナビゲーションを有効にする
        infinite: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });



// 左矢印ボタンをクリックした場合の処理 
$('.slick-prev').click(function() {
    $('.slider-track').slick('slickPrev');
  });

  // 右矢印ボタンをクリックした場合の処理
  $('.slick-next').click(function() {
    $('.slider-track').slick('slickNext');
  });
});
  



/*スライダ(新着情報)ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー*/
$(document).ready(function() {
  $('.slider-track-2').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      dots: true, // ドットのナビゲーションを有効にする
      infinite: true,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
              }
          }
      ]
  });



// 左矢印ボタンをクリックした場合の処理 
$('.slick-prev-2').click(function() {
  $('.slider-track-2').slick('slickPrev');
});

// 右矢印ボタンをクリックした場合の処理
$('.slick-next-2').click(function() {
  $('.slider-track-2').slick('slickNext');
});
});





//エリア検索ーーーーーーーーーーーーーーーーーーーーーーーーーーーー//
// ページが読み込まれた後に、Remodalを表示する
$(document).ready(function () {
  $('[data-remodal-id]').remodal();

  // エリア検索のリストをクリックしたら対応するモーダルを表示する
  $('.prefecture-list li').on('click', function () {
    var targetModal = $(this).data('remodal-target');
    $('[data-remodal-id="' + targetModal + '"]').remodal().open();
  });

  // CSSが適用された後に、HTMLを表示する
  $('#area').css('display', 'block');
});





//スクロールボタンーーーーーーーーーーーーーーーーーーーーーーーーーーーー//
// 一番上に戻るボタンの表示・非表示を制御する関数
function toggleScrollToTopButton() {
  var button = document.querySelector(".scroll-to-top-button");
  if (window.scrollY > 300) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
}

// スクロールイベントを監視してボタンの表示・非表示を切り替える
window.addEventListener("scroll", toggleScrollToTopButton);

// ボタンがクリックされたときにページの先頭にスクロールする処理
document.querySelector(".scroll-to-top-button").addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // スクロールを滑らかにする
  });
});









// Safariかどうかを判定する関数
function isSafari() {
  var ua = navigator.userAgent.toLowerCase();
  return ua.indexOf('safari') !== -1 && ua.indexOf('chrome') === -1;
}

// Safariの場合のスタイルを適用する関数
function applySafariStyles() {
  // Safariの場合に適用したいスタイルをここに記述
  // 例えば、.search-selectのスタイルを修正する場合
  $('.search-select').css({
      // Safari用のスタイルを指定
      // 例: 'property': 'value',
  });
}

$(document).ready(function () {
  // ページが読み込まれた後に実行
  if (isSafari()) {
      // Safariの場合に異なるスタイルを適用
      applySafariStyles();
  }
});










//検索機能------result専用ーーーーーーーーーーーーーーーーーーーーーーーーーー//
var jobContainer = document.getElementById("jobContainer");

// 求人情報を動的に生成してコンテナに追加
jobs.forEach(function (job) {
    var jobElement = document.createElement("div");
    jobElement.classList.add("feature");
    jobElement.innerHTML = `
        <a href="${link}">
            <img src="${image}" alt="特徴画像" class="feature-image">
            <div class="feature-content">
                <ul class="genre-list">
                    <li class="genre-1">${genre1}</li>
                    <li class="genre-2">${genre2}</li>
                    <li class="genre-2">${genre3}</li>
                </ul>
                <h3>${title}</h3>
                <p>${description}</p>
            </div>
        </a>
    `;
    jobContainer.appendChild(jobElement);
});









// 各求人情報を繰り返し処理してコンテナを生成
jobsData.forEach(job => {
  const jobContainer = document.createElement('div');
  jobContainer.className = 'job-item';

  const image = document.createElement('img');
  image.src = job.imagePath;
  image.alt = '求人画像';

  const title = document.createElement('h2');
  title.textContent = job.title;

  const genre = document.createElement('span');
  genre.textContent = job.genre;

  const description = document.createElement('p');
  description.textContent = job.description;

  jobContainer.appendChild(image);
  jobContainer.appendChild(title);
  jobContainer.appendChild(genre);
  jobContainer.appendChild(description);

  resultsContainer.appendChild(jobContainer);
});




jobsData.forEach(job => {
    const jobElement = createJobItem(job.imagePath, job.genre, job.description);
    resultsContainer.appendChild(jobElement);
});







