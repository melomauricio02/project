<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Informações sobre as matérias</title>
</head>
<body>
	<form action="final.php" method="post">
		<fieldset>
			<legend>Confirme os dados do curso</legend>
			Informe o nome do curso<br />
			<input type="text" name="nomeCurso" value="<?php echo $_POST["nomeCurso"];?>"><br />
			Informe o numero de semestres<br />
			<input type="text" name="numeroSemestres" value="<?php echo $_POST["numeroSemestres"];?>"><br />
			Informe a carga horária<br />
			<input type="text" name="cargaHoraria" value="<?php echo $_POST["cargaHoraria"];?>"><br />
			<input type="hidden" name="quantidadeMaterias" value="<?php echo $_POST["quantidadeMaterias"];?>">
		</fieldset>
		<?php for($i = 1; $i <= $_POST["quantidadeMaterias"]; $i++){?>
		<fieldset>
			<legend>Informe os dados da matéria <?php echo $i?></legend>
			Informe o nome da matéria<br />
			<input type="text" name="nomeMateria<?php echo $i;?>"><br />
			Informe o semestre<br />
			<input type="text" name="semestre<?php echo $i;?>"><br />
		</fieldset>
		<?php }?>
		<input type="submit" value="Enviar dados">
	</form>
</body>
</html>