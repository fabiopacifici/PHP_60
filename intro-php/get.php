<?php 

$name = $_GET['name'];
$lastname = 'Yoda';
str
?>

<!doctype html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<title>Document</title>
</head>
<body>
<h1>Hello <?= $name . ' ' . $_GET['lastname'];?></h1>

</body>
</html>