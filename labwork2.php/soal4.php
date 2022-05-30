<?php
    function isPrime($number){
        if ($number == 1){
            return false;
        }
        if ($number == 2){
            return true;
        }
        $x = sqrt($number);
        $x = floor($x);

        for ($i=2; $i <= $x ; $i++) { 
            if ($number % $i == 0){
                break;
            }
        }
        if ($x == $i-1) {
            return true;
        }else{
            return false;
        }
    }
    function cekPrima($n, $m){
        $jumlah = 0;
        for($i = $n; $i <= $m; $i++){
            if(isPrime($i)){
                echo $i. ',';
                $jumlah++;
            }
        }
        echo "<br> Jumlah bilangan prima " .$jumlah. "<br>";
    }
    cekPrima(0, 100);
?>