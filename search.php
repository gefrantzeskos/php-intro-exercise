<?php
error_reporting(E_ERROR | E_PARSE);
extract($_POST);

$onoma=$_POST['Text1'];
$eidos=$_POST['Select1'];


$movies = array(

"Comedy" => array("The Hangover","Knocked Up","Due Date"),

"Drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),

"Horror" => array("Halloween","The Conjuring","The Shining")

);

echo "Αποτελέσματα <br> ";
echo "-------------------------------------- <br>";

foreach ($movies as $obj_key =>$movie)
{

if ($obj_key!=$eidos)
 continue;

foreach ($movie as $key=>$value)
{
 $pos = strpos($value,$onoma);
 if ($pos!==false)
  echo $value,"<br>";
}
echo "<br>";
}


?>