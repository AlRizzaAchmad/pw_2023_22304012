<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2D</title>
  <style>
    .kotak{
      height: 40px;
      width: 40px;
      border: 1px solid black;
      text-align: center;
      line-height: 40px;
    }
  </style>
</head>
<body>
<?php
for ($n = 0; $n < 5; $n++) {
    echo '<div style = "display:flex">';
    for ($v = 0; $v < 5; $v++) {
        if ($n % 2 == 0) {

            if ($v % 2 == 0) {
                echo "<div class = 'kotak' style = 'background-color:black;'>"  . "</div>";
            } else {
                echo "<div class = 'kotak' style= 'background-color:white;'>"  . "</div>";
            }
        } else {
            if ($v % 2 == 1 ) {
                echo "<div class = 'kotak' style = 'background-color:black;'>"  . "</div>";
            } else {
                echo "<div class = 'kotak' style= 'background-color:white;'>"  . "</div>";
            }
        }
    }
    echo "</div>";
}
?>
</body>
</html>