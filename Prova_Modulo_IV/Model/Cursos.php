<?php

function trazerCursos() : array
{
	$conn = include "conexao/Conexao.php";

	$query = "SELECT * FROM utd.cursos";

	if (isset($_GET['status'])) {
		$query .= " WHERE status=" .$_GET['status'];
	}

	$result = mysqli_query($conn, $query);

	$listar_cursos = [];

	while ($linha = mysqli_fetch_assoc($result)) {
		$listar_cursos [] = $linha;
	}


	return $listar_cursos;
}

function inserirCurso($nome,$status) :void
{
	$conn = include "conexao/Conexao.php";

	$query = "INSERT INTO cursos(nome,status) VALUES ('{$nome}', '{$status}')";

	mysqli_query($conn, $query);
}

?>