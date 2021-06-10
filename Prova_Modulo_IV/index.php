<?php

include "model/Cursos.php";
include "model/Disciplinas.php";
include 'controller/Cursos_Controller.php';

$url = explode("?", $_SERVER['REQUEST_URI'])[0];


if ($url === '/api/cursos') {
	echo json_encode(trazerCursos());
	exit;
}

if ($url === '/api/disciplinas') {
	
	echo json_encode(trazerDisciplinas());
	exit;
}

if ($url === '/cursos') {
	exibirCursos();
	die;
}

if ($url === '/cursos/novo') {
	novoCurso();
	die;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listas de Cursos</title>
</head>
<body>

	<h1>Listagem de Cursos</h1>

	<h4> Meus Cursos</h4>

	<ul>
		<li>Listar todos os Cursos: <a href="/api/cursos" target="_blank">Todos os Meus Cursos</a></li>
		<li>Listar os Cursos Disponiveis: <a href="/api/cursos?status=1" target="_blank">Cursos Disponiveis</a></li>
		<li>Listar os Cursos Inativos: <a href="/api/cursos?status=0" target="_blank">Cursos Expirados</a></li>
		<li> Gerenciar Cursos : <a href="/cursos">Gerenciar Meus Cursos</a></li>
	</ul>

	<h4> Minhas Disciplinas</h4>

	<ul>
		<li>Disciplinas Ativas: <a href="/api/disciplinas" target="_blank">Minhas Disciplinas</a></li>
	</ul>

</body>
</html>