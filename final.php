<?php

include 'classes/curso.class.php';
include 'classes/materia.class.php';

$objCurso = new Curso($_POST["nomeCurso"],$_POST["numeroSemestres"],$_POST["cargaHoraria"]);

var_dump($objCurso);

$materias = array();
for($i = 1; $i <= $_POST["quantidadeMaterias"]; $i++){
	$objMateria = new Materia($_POST["nomeMateria$i"],$_POST["semestre$i"]);
	array_push($materias, $objMateria);
}
var_dump($materias);
?>