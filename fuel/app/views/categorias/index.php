
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Categorias</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<header>
		<div class="container">
			<div id="logo"></div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php echo $categoria->getNome(); ?>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in 0.0283s using 2.337mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: 1.7.2</small>
			</p>
		</footer>
	</div>
</body>
</html>

