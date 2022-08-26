<?php
    function checkPrice($age){
        $rate = 250;
        if($age >= 0 && $age <= 5) {
            return 0;
         }elseif ($age >= 6 && $age <= 10) {
            $discount = $rate * 0.1;
            return $rate * 0.9;
         }elseif ($age >= 60) {
            $discount = $rate * 0.05;
            return $rate - $discount;
         }elseif($age >= 11 && $age <= 59){
            return $rate;
         }
         
    }
    function total($discounted_price){
        $total = 0;
        foreach ($discounted_price as $price){
            $total += $price;
        }
        return $total;
    }
?>