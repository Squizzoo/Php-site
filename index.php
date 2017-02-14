<?php
session_start();

include_once 'functions/linkPhp.php';

$plugin = plugin();
$db = conn('config/core.ini');
$conn = conn();
$out = menu($db);
$form = logon($db);
$css = bootstrap('css');
$function = actions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo $css; ?>
	<title>Programming</title>
</head>
<body>
	<div id="bg">
		<div id="logo">
			<div class="prog">
				<h1>Programming</h1>
			</div>
		</div>
		<div id="menu">
			<div id="login">
			</div>
			<?php echo $form;	?>
			<h2>Menu</h2>
			<div id="listed">
				<ul>
					<li><?php echo $out; ?></li>
				</ul>
			</div>
		</div>
		<div id="title">
			<div class="head" class="bung">
				<h1>Programming for beginners</h1>
			</div>
			<div class="copy">
				<h5>&copy;Patryk Dziwosz IC1C</h5>
			</div>
		</div>
		<div id="content">
			<?php echo $function; ?>
		</div>
	</div>
</body>
</html>
