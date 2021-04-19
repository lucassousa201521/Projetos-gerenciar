<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM gp WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Projeto</title>		
	</head>
	<body>
		<h1>Editar Projeto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome do projeto: </label>
			<input type="text" name="nomeprojeto" placeholder="Digite o nome" value="<?php echo $row_usuario['nomeprojeto']; ?>"><br><br>
			
			<label>Data inicial: </label>
			<input type="date" name="datainicio" placeholder="Informe a data" value="<?php echo $row_usuario['datainicio']; ?>"><br><br>

			<label>Data final: </label>
			<input type="date" name="datafim" placeholder="Informe a data" value="<?php echo $row_usuario['datafim']; ?>"><br><br>

			<label>Valor do projeto: </label>
			<input type="int" name="valorprojeto" placeholder="Informe o valor" value="<?php echo $row_usuario['valorprojeto']; ?>"><br><br>

			<label>Risco: </label>
			<input type="int" name="risco" placeholder="Risco ( 0 - baixo, 1 - medio, 2- alto )" value="<?php echo $row_usuario['risco']; ?>"><br><br>

			<label>Participantes: </label>
			<input type="text" name="participantes" placeholder="Informe os nomes" value="<?php echo $row_usuario['participantes']; ?>"><br><br>
			
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>