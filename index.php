<!--DOCTYPE html-->


<html>
<head>
	<title>Новости</title>
	<meta content="sait">
	<meta http-equiv="qqq">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<head>
<body>

<h1 class="pop">Новости</h1>
<a id="popp"> asd</a>
<table border=2px id="cs" align="right">
<tr>

<td>

<form  name="form1" action="http://www.test1.ru/core.php">
<input  type="text" name="in1" required placeholder="Название новости"  >



<br><textarea name="in2" cols="50" rows="5px" autofocus required maxlength="250" name="news" placeholder="максимум 240 символов" tabindex="1" wrap="hard"  ></textarea></p></br>

 

   
<input type="text" required name="in3" placeholder="Автор"  >
	
		


  <input type="submit"><span>Отправить</span></button></form>
</td>
</tr>
  </table>

  
  <p class="pp">Class</p>
  <p id="asd"> asd </p>
</body>

<?php $db = mysql_connect('localhost','ruslan','123456');
mysql_select_db('novosti', $db); 




$result = mysql_query("SELECT * FROM novosti") 
or die(mysql_error());  

echo "<table border='1'>";
echo "<tr> <th>Nazvanie</th> <th>Novost</th>  <th>Autor</th> </tr>";
while($row = mysql_fetch_array( $result )) {
	echo "<tr><td>"; 
	echo $row['Nazvanie'];
	echo "</td><td>"; 
	echo $row['Novost'];
	echo "</td><td>"; 
	echo $row['Autor'];
	echo "</td></tr>";

} 

echo "</table>";
?>
