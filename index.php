<!DOCTYPE html>
<html>

<head>
	<link rel='stylesheet' href='.\index.css'>
	<title>calculadora</title>
	<?php include '.\modulos\bootstrap.html' ?>
</head>

<body>
	<?php
	include '.\modulos\lib.php';
	$x = isset($_GET['x']) ? $_GET['x'].'' : '';
	$y = isset($_GET['y']) ? $_GET['y'].'' : '';
	$o = isset($_GET['op']) ? $_GET['op'].'' : '';
	?>
	<h1>alexsander</h1>
	<form id='formulario' method='get'>
		<div id='caixa'>
			<div id='entrada_x'>
				<input id='numero_x' name='x' type='number' step='0.001' value=<?php echo $x ?>>
			</div>
			<div>
				<select id='operacao' class='form-select' name='op'>
					<option <?php echo $o ?> value='1'>soma</option>
					<option value='2'>subtração</option>
					<option value='3'>multiplicação</option>
					<option value='4'>divisão</option>
				</select>
			</div>
			<div id='entrada-y'>
				<input id='numero_y' name='y' type='number' step='0.001' value='<?php echo $y ?>'>
			</div>
			<div id='saida'>
				<span>resultado -> <?php echo calcular($x, $y, $o); ?></span> <!-- <output name='res' for='numero_x numero_y'></output> -->
			</div>
		</div>
		<div id='botoes'>
			<input type='submit' class='btn btn-primary'>
		</div>
	</form>
</body>

</html>