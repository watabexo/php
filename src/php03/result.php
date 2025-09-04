<?php

require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if(!$option) {
    header('Location: index.php');
}

foreach($status_codes as $status_code){
    if($status_code['code'] === $answer_code){
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <!-- ヘッダーから下の所 -->
        <div class="result__content">
            <!-- 結果の表示 -->
            <div class="result">
                <?php if ($result): ?>
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>

            <!-- 回答の詳細 -->
            <div class="answer-table">
                <!-- 表の本体 -->
                <table class="answer-table__inner">

                    <!-- 1行目：ステータスコード -->
                    <tr class="answer-table__row">
                        <!-- 見出し -->
                        <th class="answer-table__header">ステータスコード</th>
                        <!-- 値（後で入る） -->
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>

                    <!-- 2行目：説明 -->
                    <tr class="answer-table__row">
                        <!-- 見出し -->
                        <th class="answer-table__header">説明</th>
                        <!-- 値（後で入る） -->
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </main>

</body>


</html>