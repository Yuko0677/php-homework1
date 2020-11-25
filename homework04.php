<?php

//課題1　数値を2倍にして返す関数
function double($some){
    //$resultは結果を保存する関数
    $result = 0;
    
    //$someは2倍にする
    $result = $some*2;
    return $result;
    }
//関数を実行
echo double(150);
echo "\n";

//課題2　
//$a と$bを仮引数に持ち$aと$bを足した結果を返す関数
function sum($a, $b){
    //$resultは結果を保存する変数
    $result = 0;
    
    //$resultに$aと$bを足す
    $result = ($a + $b);
    //$resultを結果として返す
    return $result;
}    
//関数を実行する
echo sum(5,199);
echo "\n";

//課題3
$arr = array(1,3,5,7,9);
function multiplay ($arr){
    $result =1;
    foreach($arr as $a){
        $result *=$a;
    }
    return $result;
}
echo multiplay($arr);
echo "\n";


//課題4
$arr = array(8,3,2566,9,69,25,4);
function max_array($arr){
    //とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    //配列のそれぞれの要素とmax_numberを比較し、大きいものをmax_numberとしていく
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }else {
            $max_number = $max_number;
        }
    }
    return $max_number;
    }
//関数を実行する
echo max_array($arr);
echo "\n";

//課題5
//strip_tags

$text = '<p>Test paragraph.</p><!--Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push
$stack = array ("math","Japanese");
array_push($stack, "science", "society");
print_r($stack);

//array_merge
$stack = array("math", "Japanese");
$stack = array_merge($stack, array("science"));
print_r($stack);

//time, mktime
//デフォルトのタイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

//出力例　
echo date("Y/m/d H:i:s", mktime(18, 52, 0, 11, 24, 2020));
echo "\n";

print date("Y/m/d G:i:s");
echo "\n";

//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ:'.time();
echo "\n";

//3日後のタイムスタンプを取得
$nweek = time() + (3*24*50*60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";

//mktime 指定した日時のタイムスタンプを取得
$timestamp = mktime(0,0,0,8,1,2017);
echo $timestamp;
echo "\n";

//date 現在の日時を取得
echo date('Y/m/d', time());
echo "\n";

//3日後のタイムスタンプを取得
$nweek = time() + (7*24*60*60);
//3日後の日時を取得
echo date('Y/m/d', $nweek);
echo "\n";
?> 