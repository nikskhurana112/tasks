<?php
$name = 'Harry Potter';
$page = 198;
$extra_page = 10;
$forget = true;
$total_page = [];
if ($forget == false){
    $total_page = [$page + $extra_page];
}
else{
    $total_page = [$page, $extra_page];
}
$money_earned = 0;
for($i=0; $i < sizeof($total_page); $i++){
    if($total_page[$i] <= 50 && $total_page[$i] > 0){
        $money_earned += 0.50 * $total_page[$i];
    }
    else if($total_page[$i] <= 100 && $total_page[$i] >= 51){
        $money_earned += 0.40 * $total_page[$i];
    }
    else if($total_page[$i] <= 200 && $total_page[$i] >= 101){
        $money_earned += 0.30 * $total_page[$i];
    }
    else{
        $money_earned += 0.25 * $total_page[$i];
    }
}
echo $money_earned;