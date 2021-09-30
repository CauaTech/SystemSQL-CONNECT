<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.admin.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/c0ccd5b649.js"></script>
</head>
<body>
</body>
</html>
<?php 
define('HOST','127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', '');

$connect = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('<div class="container">
		<div class="alert alert-danger">
		  <strong><i class="fas fa-exclamation-triangle"></i> ERRO!</strong> não foi possivel acessar o banco de dados.
		</div>
	</div>');

?>

