<!DOCTYPE html>
<html>

<head>
	<link rel='stylesheet' href='.\index.css'>
	<title>calculadora</title>
</head>

<body>
	<h1>alexsander</h1>
	<form id='formulario' method='get' action='.'> <!-- oninput='alert(operacao.value);switch(operacao.value){case 1:res.value=parseFloat(numero_x.value)+parseFloat(numero_y.value);break;case 2:res.value=parseFloat(numero_x.value)-parseFloat(numero_y.value);break;case 3:res.value=parseFloat(numero_x.value)*parseFloat(numero_y.value);break;case 4:res.value=parseFloat(numero_x.value)/parseFloat(numero_y.value);break;}' -->
		<div id='caixa-maior'>
			<div id='entrada-x'>
				<input id='numero_x' name='x' type='number' value='<?php if (isset($_GET['x'])) {
																		echo (float)$_GET['x'];
																	} ?>'>
			</div>
			<div>
				<select name='op' id='operacao' value='<?php if (isset($_GET['op'])) {
															echo (float)$_GET['op'];
														} ?>'>
					<option value='1'>soma</option>
					<option value='2'>subtração</option>
					<option value='3'>multiplicação</option>
					<option value='4'>divisão</option>
				</select>
			</div>
			<div id='entrada-y'>
				<input id='numero_y' name='y' type='number' value='<?php if (isset($_GET['y'])) {
																		echo (float)$_GET['y'];
																	} ?>'>
			</div>
			<div id='saida'>
				<span>resultado -> <?php if (isset($_GET['op']) and isset($_GET['x']) and isset($_GET['y'])) {
										$x = (float)$_GET['x'];
										$y = (float)$_GET['y'];
										$o = (float)$_GET['op'];
										switch ($o) {
											case 1:
												echo $x + $y;
												break;
											case 2:
												echo $x - $y;
												break;
											case 3:
												echo $x * $y;
												break;
											case 4:
												if ($y == 0) {
													echo 'Infinity';
												}
												echo $x / $y;
												break;
											default:;
										}
									} ?></span> <!-- <output name='res' for='numero_x numero_y'></output> -->
			</div>
		</div>
		<div id='botoes'>
			<input type='submit'>
		</div>
	</form>
</body>

</html>