<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2C</title>
  <style>
    .kotak{
      height: 40px;
      width: 40px;
      border: 1px solid black;
      background-color: salmon;
      text-align: center;
      line-height: 40px;

    }
  </style>
</head>
<body>

<?php
for ($n = 1; $n <= 10; $n++) {
    echo '<div style = "display:flex">';
    for ($v = 1; $v <= 11 - $n; $v++) {
        echo '<div class ="kotak">' .'<b>'. $v . '</b>'  . '</div>';
    }
    echo '<br>';
    echo '</div>';
}
?>
  
</body>
</html>