<?php

$host = 'localhost';
$usuario = 'root';
$pass = '';

$conn = mysql_connect($host, $usuario, $pass) or die ('Error conectando a la base de datos');

$bdnombre = 'neuro-codificacion';
mysql_select_db($bdnombre);

?>