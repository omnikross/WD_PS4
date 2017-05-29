<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form  method="get">
		<p>Высота<br>
			<input type="text" name="height">
		</p>
		<p>Ширина<br>
			<input type="text" name="width">
		</p>
		<input type="submit">
	</form>
	<table border='1'>
		<?php  
		if(isset($_GET['width'])) {
			$table = '';
			$width  = intval($_GET['width']);
			$height = intval($_GET['height']);
			for ($i = 1; $i <= $width ; $i++) { 
				$table .= '<tr>';
				for ($j = 1; $j <= $height ; $j++) { 
					$color = ($i + $j) % 2 ? 'white' : 'black';
					$table .= "<td bgcolor='{$color}' width='20' height='20'></td>"; 
				}
				$table .= '</tr>';
			}
			echo $table;
		}
		?>
	</table>
</body>
</html>
