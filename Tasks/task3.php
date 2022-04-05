<?php
$array = [1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1];
$working_day = 1;
$holiday = 0;
$fix = 0;
$count = 0;
$total_holiday = [];
for ($i = 0; $i < sizeof($array); $i++) {
    if ($array[$i] == $holiday) {
        $array[$i] = $working_day;
        for ($j = $fix; $j < sizeof($array); $j++) {
            if ($array[$j] == $working_day) {
                $count++;
            } else {
                array_push($total_holiday, $count);
                echo $count . " ";
                $count = 0;
                $array[$i] = $holiday;
                $fix = $i + 1;
                break;
            }
        }
    }
}
// for($i = 0; $i < sizeof($total_holiday); $i++)
// {
//     echo $total_holiday[$i] . ' ';
// }
// $max_holiday = $total_holiday[0];
// for($i = 1; $i < sizeof($total_holiday); $i++){
//    if($total_holiday[$i] > $max_holiday){
//        $max_holiday = $total_holiday[$i];
//        echo $max_holiday . " "; 
//    }
// }
