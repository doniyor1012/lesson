<?php
$n=isset($_POST['n']) ? $_POST['n']: null;
$x = explode (",",$n );
 var_dump($x);
?>
<!doctype html>
<head>
    <title> salom</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="n"><br>
    <button type="submit"> send </button>

</form>

</body>