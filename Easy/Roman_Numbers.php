<!DOCTYPE html>
<html>
    <head>
        <title>Les chiffres romains.</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Un convertisseur de chiffres romains !</h2>
        
        <p>
        <form method="post" action="Roman_Numbers.php">
    <p>
        <label for="chiffre">''Ecrivez un chiffre inférieur à 3999 :'</label>
        <input type="number" name="chiffre" id="chiffre" placeholder="Ex. : 1990" size="30" maxlength="20">
        <input type="submit" value="Envoyer">
    </p>
</form>
<?php
if(isset($_POST["chiffre"])) {
$contenu = $_POST["chiffre"];}
 function solution($number)
{
  $arrayRoman = ["M", "D", "C", "L", "X", "V", "I"];
  
  $array = str_split($number);
  $answer = [];
  $index = (4 - count($array)) * 2;
  
for ($i = 0; $i < count($array); $i++){
  if ($array[$i] < 4) {
    for ($j = 1 ; $j <= $array[$i]; $j++){
    array_push($answer, $arrayRoman[$index]);
  }}
  else if ($array[$i] == 4) {
  array_push($answer, $arrayRoman[$index] . $arrayRoman[$index - 1]);
    }
  else if ($array[$i] == 5) {
    array_push($answer, $arrayRoman[$index - 1]);
  }
  else if ($array[$i] < 9) {
    array_push($answer, $arrayRoman[$index - 1]);
    for ($j = 6; $j <= $array[$i]; $j++) {
    array_push($answer, $arrayRoman[$index]);  
  }}
  else if ($array[$i] == 9) {
    array_push($answer, $arrayRoman[$index] . $arrayRoman[$index - 2]);
  }
    $index += 2;
}
  return implode($answer);
}
if(isset($_POST["chiffre"])) {
echo "Votre chiffre : " . $contenu;}?></br>
<?php
if(isset($_POST["chiffre"])) {
echo solution($contenu); } 
?>
            
           
        </p>
    </body>
</html>