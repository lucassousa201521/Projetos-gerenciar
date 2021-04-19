<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nomeprojeto = filter_input(INPUT_POST, 'nomeprojeto', FILTER_SANITIZE_STRING);
$datainicio = filter_input(INPUT_POST, 'datainicio', FILTER_SANITIZE_NUMBER_FLOAT);
$datafim = filter_input(INPUT_POST, 'datafim', FILTER_SANITIZE_NUMBER_FLOAT);
$valorprojeto = filter_input(INPUT_POST, 'valorprojeto', FILTER_SANITIZE_NUMBER_INT);
$risco = filter_input(INPUT_POST, 'risco', FILTER_SANITIZE_NUMBER_INT);
$participantes = filter_input(INPUT_POST, 'participantes', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE gp SET nomeprojeto='$nomeprojeto', datainicio='$datainicio', datafim='$datafim', valorprojeto='$valorprojeto', risco='$risco', participantes='$participantes'  WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	
	header("Location: index.php");
}else{
	
	header("Location: editar.php?id=$id");
}
