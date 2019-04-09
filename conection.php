<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>


<<?php 
 //arquivo de conexão.
$host = "localhost";
$user = "root";
$pass = "";
$banco = "lista";

$link = mysql_connect($host,$user,$pass,$banco);
if (mysql_errno($link)) {
echo "erro de conexao";		# code...
}else{
echo "conexão ok!";

}




 ?>