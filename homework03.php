<?php
//課題1
$name = "Yuko";
if ($name == "Yuko") {
    echo "わたしは" .$name ."です。";
} else {
    echo "わたしは" .$name ."ではありません";
}

//課題2
//$iが0から始まり、10000以下の間繰り返し処理を行う
$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

//課題3
$fruits = array("orange", "pear", "water-melon", "grape", "kiwi");
foreach($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する /
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}