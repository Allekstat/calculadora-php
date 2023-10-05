<!DOCTYPE html>
<html>

<head>
	<link rel='stylesheet' href='.\index.css'>
	<title>calculadora</title>
 <?php include './módulos/bootstrap' ?>
</head>

<body>
 <?php
  $x = $_GET['x'];
  $y = $_GET['y'];
  $o = $_GET['op'];

  function calc($x, $y, $operacao) {
   switch ($operacao) {
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
     } else {
      echo $x / $y;
     }
     break;
    }
  }
 ?>
	<h1>alexsander</h1>
	<form id='formulario' method='get' action='.'>
		<div id='caixa'>
			<div id='entrada_x'>
				<input id='numero_x' name='x' type='number' value='<?php echo $x ?>'>
			</div>
			<div>
				<select id='operacao' name='op' value='<?php echo $o ?>'>
					<option value='1'>soma</option>
					<option value='2'>subtração</option>
					<option value='3'>multiplicação</option>
					<option value='4'>divisão</option>
				</select>
			</div>
			<div id='entrada-y'>
				<input id='numero_y' name='y' type='number' value='<?php echo $y ?>'>
			</div>
			<div id='saida'>
				<span>resultado -> <?php if (isset($_GET['op']) and isset($_GET['x']) and isset($_GET['y'])) {
										$x = (float)$_GET['x'];
										$y = (float)$_GET['y'];
										$o = (float)$_GET['op'];
										 ?></span> <!-- <output name='res' for='numero_x numero_y'></output> -->
			</div>
		</div>
		<div id='botoes'>
			<input type='submit'>
		</div>
	</form>
</body>

</html>