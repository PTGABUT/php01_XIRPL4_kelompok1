<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://localhost/01%20PhP/tangkap.php?v1=saya&v2=keren">Test $GET</a><p><-- untuk menangkap variable pada url</p>
	<?php
	echo $_GET['v1'] . $_GET['v2'];
	?>
	<p>Latihan 2</p>
	<fieldset id="ini">
	<label for="ini">DATA</label>
	<form method="POST" action="proses.php">
		<p>Nama : <input type="text" name="nama"></p>
		<p>Alamat : <input type="text" name="alamat"></p>
		<p><input type="submit" value="Proses" name="submit"></p>
	</form>
	</fieldset>
</body>
</html>