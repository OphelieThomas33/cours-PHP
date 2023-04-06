<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tables de multiplication</h1>

<?php

for ($table = 1; $table <= 9; $table++) {
  echo 'Table de  : '.$table.'<br>';
  for ($multiplicateur = 0; $multiplicateur <= 10; $multiplicateur++) {
    echo $table.' x '.$ultiplicateur.' = '. $table*$ultiplicateur. '<br>';
  }
}
?>

</body>
</html>
