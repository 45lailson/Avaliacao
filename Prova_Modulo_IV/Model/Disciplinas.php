<?php

function trazerDisciplinas() : array
{
	$conn = include "conexao/Conexao.php";

	$query = "SELECT * FROM disciplina";

	$result = mysqli_query($conn, $query);

	$listar_cursos = [];

	while ($linha = mysqli_fetch_assoc($result)) {
		$listar_cursos [] = $linha;
	}


	return $listar_cursos;
}

?>