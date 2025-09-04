<?php
// 都市の時間を調べる関数、今回$city_nameには東京が格納
function searchCityTime($city_name)
{
    // 都市のデータが入ってるファイルを読み込む
    require('config/cities.php');
    // 都市リストの中から1つずつ取り出す
    foreach($cities as $city){
        // $cityの中の都市名と調べたい都市名（$city_name）がまったく同じかどうかチェックする
        if($city['name'] === $city_name){
        // $city['name']＝$cityの中にある「都市名」のこと
        // $city_name＝関数に渡された都市名（調べたい都市名）
        // ===＝左と右が「型も値も完全に同じかどうか」を比べる
        // if（条件）＝もし「条件」が正しければ、この中の処理を行う
            // 選択した都市の時間帯で、今の日時を作る
            $date_time = new DateTime('',new DateTimeZone($city["time_zone"]));
            // 空の''は日付指定は特にないよの意
            $time = $date_time->format('H:i');
            // $date_timeに入っている日時を、＊：＊の形にして取り出すの意味
            $city['time'] = $time;
            // 都市のデータに今の時間を追加
            return $city;
            // この都市のデータを返す（関数の答えとして）
            // 例）東京の時間調べてきて！→関数が中で調べる→はい、これが東京の情報です！と返ってくるの意味
        }
    }
}
