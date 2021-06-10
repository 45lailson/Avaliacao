<?php

$user = "root";
$senha = "";
$db = "utd";
$host = "localhost";

try {

		$conn = mysqli_connect($host, $user, $senha, $db);
		

	} catch (Exception $exception) {

		die("ERRO ao conectar");
	}

	return $conn;

?>