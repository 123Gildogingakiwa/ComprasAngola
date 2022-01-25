<?php 

$con =mysqli_connect('localhost','root');

 mysqli_select_db($con,'shopzage');

 if ($con) {
 	

 }else{
 	echo "Banco de Dados Não Conectado";
 }


 ?>