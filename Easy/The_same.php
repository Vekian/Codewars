<?PHP 
function comp($a1, $a2) {
        
        if (($a1 === null) || ($a2 === null)) {
          return false;
        }
        
        sort($a1);
        sort($a2);
        for ($i = 0; $i < count ($a1); $i++) {
          if (pow($a1[$i], 2) != $a2[$i]) {
            return false;
          }
        }
        return true;
        
        
        }
        ?>