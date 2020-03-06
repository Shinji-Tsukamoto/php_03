<?php
$name = "Shinji";

if ($name == "Shinji") {
    echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";    
}

$total = 0;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple", "banana", "orange", "strawberry", "cherry");
foreach($fruits as $fluit){
  echo $fluit;
  echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}