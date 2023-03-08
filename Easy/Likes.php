<?php function likes( $names ) {
  $answer = "";
  $count = count($names);
  
  if ($count == 0) {
    $answer = "no one likes this";
  }
  else if ($count == 1) {
    $answer = $names[0] . " likes this";
  }
  else if ($count == 2) {
    $answer = $names[0] . " and " . $names[1] . " like this";
  }
  else if ($count == 3) {
    $answer = $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
    }
  else {
    $answer = $names[0] . ", " . $names[1] . " and " . ($count - 2) . " others like this";
  }
  
  return $answer;
    // Your code here...
}
?>