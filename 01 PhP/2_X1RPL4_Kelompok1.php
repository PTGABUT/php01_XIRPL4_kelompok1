<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<?php
		$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
 		echo $date->format('d-m-Y H:i:s');
 		$n=5;
		echo '<br> ';
		for($i=$n; $i>=1; $i--)
		{
		for($j=1; $j<=$i; $j++)
			{
			echo '*';
			}
		echo '<br> ';
		}
	?>
</body>
</html>