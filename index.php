<?php
require_once ('vendor/autoload.php');
$db = new MysqliDb ('localhost', 'root', 'root', 'test');
$fruit = $db->get('fruit');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="fruit">
		<ul>
			<?php foreach ($fruit as $key => $value) {
				?>
				<li><?php echo $value['name']; ?></li>
				<?php
			} ?>
		</ul>
	</div>
</body>
</html>