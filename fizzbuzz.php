<?php
    function fizzbuzz() {
        for ($i = 0; $i <=100; $i++){
        if ($i % 15 ==0){
            print 'fizzbuzz' . PHP_EOL;
        }
        elseif ($i % 5 ==0){
            print 'buzz' . PHP_EOL;
        }
        elseif ($i % 3 ==0){
            print 'fizz' . PHP_EOL;  
        }
        else {print $i . PHP_EOL;
        }
        }
    } 
    print fizzbuzz();
?>