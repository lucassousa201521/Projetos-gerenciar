<?php
include_once ("conexao.php");

$nomeprojeto = filter_input(INPUT_POST, 'nomeprojeto', FILTER_SANITIZE_STRING);
$datainicio = filter_input(INPUT_POST, 'datainicio', FILTER_SANITIZE_NUMBER_FLOAT);
$datafim = filter_input(INPUT_POST, 'datafim',  FILTER_SANITIZE_NUMBER_FLOAT);
$valorprojeto = filter_input(INPUT_POST, 'valorprojeto', FILTER_SANITIZE_NUMBER_FLOAT);
$risco = filter_input(INPUT_POST, 'risco', FILTER_SANITIZE_NUMBER_INT);
$participantes = filter_input(INPUT_POST, 'participantes', FILTER_SANITIZE_STRING);

$result_gp = "INSERT INTO gp (nomeprojeto, datainicio, datafim, valorprojeto, risco, participantes) VALUES ('$nomeprojeto', '$datainicio', '$datafim', '$valorprojeto', '$risco', '$participantes')";
$resultado_gp = mysqli_query ($conn, $result_gp);

if(mysqli_insert_id($conn)){
 
  header ("Location: EDITAR.php");
}else{
 
  header ("Location:EDITAR.php");;
}