<?php 
$db = mysql_connect('localhost','ruslan','123456');
mysql_select_db('novosti', $db); 

$in1 = $_GET['in1'];
$in2 = $_GET['in2'];
$in3 = $_GET['in3']; 



$query = "SELECT `Nazvanie` FROM `novosti` WHERE `Nazvanie`='{$in1}'";
$sql = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($sql) > 0)
{
echo '“акое название новости уже существует';
}
else
{
  if (empty($in1))
  {
    echo "1";
  }
  else
  {
    $result = mysql_query ("INSERT INTO novosti (Nazvanie, Novost, Autor) VALUES ('$in1', '$in2', '$in3')");
  }
}
?>






