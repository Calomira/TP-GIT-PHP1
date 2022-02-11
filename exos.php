
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 
<?php
echo  "<h2>Bonjour PHP</h2>";  


echo  "Bonjour par echo PHP  
texte multi-ligne  
imprimé par   
Déclaration d'echo PHP";  

$str = "salut chaîne" ;  
$x = 200 ;  
$Y = 44.6;  
echo " La chaîne est: $str  <br/> ";  
echo "entier est: $x  <br/> ";  
echo "flotteur est: $y  <br/> ";

$color = "rouge" ;  
echo "ma voiture est". $color. " <br> ";  

$a = "Bonjour" ; 
$_b = "bonjour" ;  
  
echo "$a  <br/>  $_b";

define("MESSAGE","Bonjour PHP w3tutoriels");  
echo MESSAGE;


$x;
$Y;
$x = 5 ;  
$y = 6 ;  
$z = $x + $y;  
echo $z;
?>

</body>
</html>
