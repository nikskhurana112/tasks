<?php 
$tickets_left=[10, 5, 0, -3, 31];
$Max_tickets=50;
$base_profit=100;
$profit=0;

for($i=0; $i < count($tickets_left); $i++){
    $tickets_sold=$Max_tickets - ($tickets_left[$i]);
    if($tickets_sold < 31){
        $profit+=$base_profit*$tickets_sold;
    }
    else if($tickets_sold < 48 && $tickets_sold > 30){
        $profit+= 30*$base_profit;
        $profit+= ($tickets_sold - 30) * 2 * $base_profit;
    }
    else if($tickets_sold > 47 && $tickets_sold <= 50){
        $profit+= 30*$base_profit;
        $profit+= 17*$base_profit*2;
        $profit+= ($tickets_sold - 47) * 5 * $base_profit;
    }
    else{
        $profit+= 30*$base_profit;
        $profit+= 17*$base_profit*2;
        $profit+= 3 * 5 * $base_profit;
        $profit+= ($tickets_sold - 50) * $base_profit;
    }
    
}
echo $profit;
?>