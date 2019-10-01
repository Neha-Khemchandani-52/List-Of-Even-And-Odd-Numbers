<?php

/***
*Description : To get list of Even and Odd numbers based on parameter supplied to respective functions
*Date : 1st October,2019
*Added By : Neha Khemchandani
***/

  function Even($number)
  {
      for($i=1;$i<=$number;$i++){
          echo $i*2;
          echo PHP_EOL;

      }
   }

  function Odd($number)
  {
        for($i=1;$i<=$number;$i++){
            echo ($i*2)-1;
            echo PHP_EOL;

        }
   }

Even(2);
Odd(2);

?>
