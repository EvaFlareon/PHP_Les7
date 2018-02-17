<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Список тестов</title>
	</head>
	<body>
		<h1>Список доступных тестов:</h1>
		<form action="test.php" method="get">
			<ol>
				<?php foreach (glob("files/*.json") as $filename) { ?>
				<li>
					<input type="radio" name="filename" value="<?= $filename ?>">
					<?php 
						$content = file_get_contents($filename);
						$result = json_decode($content, true);
						echo $result[0]['name']."<br>";
					?>
				</li>
				<?php } ?>
			</ol>
			<input type="submit" value="Выполнить">
		</form>
	</body>
</html>