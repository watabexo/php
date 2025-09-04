<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>


<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02.5/index.php">
                <span class="header__title">
                    World Clock
                </span>
            </a>
        </div>
    </header>

    <main>
        <div class="search-form__content">
            <h2 class="search-form__content-title">
                日本と世界の時間を比較
            </h2>
        <form class="search-form" action="" method="get">
            <select class="search-form__item" name="select">
                <option value="シドニー">シドニー</option>
                <option value="上海">上海</option>
                <option value="モスクワ">モスクワ</option>
                <option value="ロンドン">ロンドン</option>
                <option value="ヨハネスブルク">ヨハネスブルク</option>
                <option value="ニューヨーク">ニューヨーク</option>
            </select>
            <button class="search-form__button-submit" type="submit">
                検索
            </button>
        </form>
        </div>
    </main>

</body>

</html>