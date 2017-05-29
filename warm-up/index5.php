<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="num"/>
		<input type="submit"/>
	</form>
	<?php 
	if(isset($_POST['num'])) {
		$num = (int) $_POST['num'];
		$count = strlen($num);

		if($count > 1) {
			$sum = 0;
			$arr = str_split($num);

			for($i = 0; $i < $count; $i++)
				$sum += $arr[$i];

			echo 'Сумма: ', $sum;
		}
		else
			echo 'Вы ввели одну цифру. ', $num;
	}
	?>
</body>
</html>