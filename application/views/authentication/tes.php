<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tes login dengan google dan facebook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php if (isset($userData)){?>
			<?php print_r($userData) ?>
		<?php }else{ ?>
			<div class="center">
				<a href="<?= $authUrl ?>" class="btn btn-primary">Masuk dengan akun google</a>
				<a href="<?= $loginUrl ?>" class="btn btn-primary">Masuk dengan akun facebook</a>
			</div>
		<?php } ?>
		
	</div>
</body>
</html>


