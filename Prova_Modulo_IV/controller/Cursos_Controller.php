<?php

 function exibirCursos(): void
 {

 $cursos = trazerCursos();

 require 'views/cursos/listarCursos.phtml';

 }

 function novoCurso(): void

 {
 	if ($_POST) {
 		inserirCurso($_POST['nome'], $_POST['status']);

 		header('location: /cursos');
 		return;
 	}
 	require 'views/cursos/novo.phtml';
 }


?>