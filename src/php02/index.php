<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ヘッダー領域 -->
  <header class="header">
    <div class="header__inner">
    <!-- ヘッダーの中身をまとめるための箱 -->
      <a class="header__logo" href="/php02/index.php">
      <!-- aタグはリンク/php02/index.phpに飛ぶ -->
        World Clock
        <!-- ロゴ名・これを押すと/php02/index.phpに行く -->
      </a>
    </div>
  </header>

  <!-- メインコンテンツ開始 -->
  <main>
    <!-- タイトル部分 -->
    <div class="search-form__content">
      <!-- 見出し、検索フォームのタイトル -->
      <h2 class="search-form__content-title">
      日本と世界の時間を比較
      </h2>
    </div>
    
    <!-- 検索フォーム開始、getでresult.phpへ送信 -->
    <form class="search-form" action="result.php" method="get">
      
      <!-- 都市選択のセレクトボックス -->
      <div class="search-form__item">
        <select class="search-form__item-select" name="city">
          <option value="シドニー">シドニー</option>
          <option value="上海">上海</option>
          <option value="モスクワ">モスクワ</option>
          <option value="ロンドン">ロンドン</option>
          <option value="ヨハネスブルグ">ヨハネスブルグ</option>
          <option value="ニューヨーク">ニューヨーク</option>
        </select>
      </div>
      
      <!-- 検索ボタン部分 -->
      <div class="search-form__button">
        <!-- 検索ボタンを送信 -->
        <!-- buttonタグとはformタグで作成したフォームの中でボタンを作成できるタグ、inputと似ているがボタン上のテキストを変えたり画像を表示させたりできるのはこっち -->
        <button class="search-form__button-submit" type="submit">検索</button>
      </div>
    </form>
  </main>

</body>

</html>