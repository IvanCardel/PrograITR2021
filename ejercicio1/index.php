<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../pina.png">
    <title>Document</title>
</head>
<body>
    <?php include_once("../layout/nav2.php") ?>
    <div class="container mt-5 col-8">
        <div class="card">
		<div class="card-header text-center">
			<h1>Calculadora</h1>
		</div>
		<div class="card-body">
		<form method="POST" id="datos">
		<div class="container">
			<input type="text" name="operando1">
		</div>
		<div class="container">
			<select name="operador">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
		</div>
		<div class="container">
			<input type="text" name="operando2">
		</div>
		<div class="card-footer">
		<div class="pull-right text-center">
			<button type="submit" class="btn btn-lg text-primary" id="enviar">
			Calcular
			</button>
		</div>
		</div>
	</form>
		</div>
        </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/jquery-3.1.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="../js/datos.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/all.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  
  <script src="../js/stylish-portfolio.min.js"></script>
</body>
</html>