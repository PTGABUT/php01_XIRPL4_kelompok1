<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['nama'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
  echo"<br>";
  $alamat = $_POST['alamat'];
  if (empty($alamat)) {
    echo "alamat is empty";
  } else {
    echo $alamat;
  }
}
?>

</body>
</html>