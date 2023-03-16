<?php
function toWeirdCase($string) {
          $array= explode(" ", $string);
          for ($j=0; $j < count($array); $j++) {
            $arrayWord = str_split($array[$j]);
            for ($i = 0; $i < count($arrayWord); $i ++) {
              if ($i % 2 == 0) {
                $arrayWord[$i] = strtoupper($arrayWord[$i]);
              }
              else {
                $arrayWord[$i] = strtolower($arrayWord[$i]);
              }
            }
            $array[$j] = implode($arrayWord);
            
            
          };


    return (implode(" ",$array));
}?>