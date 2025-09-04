<?php
// 時間を調べるファイルを読み込む
// functionsというフォルダ内にあるファイル
require_once('functions/search_city_time.php');
// 「東京」の今の時間を調べて$tokyoに入れる
$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'],ENT_QUOTES);
// htmlspecialcharsはセキュリティのため
// index.phpファイルのmethodタグがgetだから$_GET
$comparison = searchCityTime($city);
// $cityの都市の時間を調べて、結果を$comparisonに入れる
?>



<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <!-- ヘッダーについて -->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <!-- 結果表示全体のコンテナ -->
        <div class="result__content">

            <!-- 各都市の結果カードをまとめるコンテナ、だからcards -->
            <div class="result-cards">

                <!-- 一つ目の都市の結果カード -->
                <div class="result-card">
                    <!-- 国旗画像を表示する枠 -->
                    <div class="result-card__img-wrapper">
                        <!-- imgタグの時alt使う、画像が表示できない代わりに表示させるテキスト -->
                        <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                    </div>
                    <!-- 都市名と時間を表示する部分 -->
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $tokyo['name']?>
                        </p>
                        <!-- 都市名 -->
                        <p class="result-card__time">
                            <?php echo $tokyo['time']?>
                        </p>
                        <!-- 時間 -->
                    </div>
                </div>

                <!-- 二つ目の都市の結果カード（一つ目と同じ） -->
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $comparison['name']?>
                        </p>
                        <p class="result-card__time">
                            <?php echo $comparison['time']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>



