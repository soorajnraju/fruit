<?php
require_once ('inc/MysqliDb.php');
$db = new MysqliDb (getenv('MYSQL_DSN'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), 'blog');
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