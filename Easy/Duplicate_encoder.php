function duplicate_encode($word){
	// ...
  $string = strtolower($word);
  $array = str_split($string);
  $once = '(';
  $mult = ')';
  for ($i = 0; $i < count($array); $i++) {
   
    if ((substr_count($string, $array[$i])) > 1) {
      $array[$i] = $mult;
    }
    else {
      $array[$i] = $once;
    }}
    
  
    return implode($array);
  }