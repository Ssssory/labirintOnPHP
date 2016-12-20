<?php
require_once "metods.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="level">


  <?php
  $start_arr = [1,5,5,10,2,15,5,10,5,2];
  $line2_arr = [15,5,5,9,5,12,15,9,5,2];
  $line3_arr = [13,5,2,15,5,10,9,5,5,14];
  $line4_arr = [0,0,0,0,0,0,0,0,0,0];
  $line5_arr = [0,0,0,0,0,0,0,0,0,0];
  $line6_arr = [0,0,0,0,0,0,0,0,0,0];
  $line7_arr = [0,0,0,0,0,0,0,0,0,0];
  $line8_arr = [0,0,0,0,0,0,0,0,0,0];
  $line9_arr = [0,0,0,0,0,0,0,0,0,0];
  $last_arr = [0,0,0,0,0,0,0,0,0,0];

  $row_start = drow_row($start_arr);
  $row2 = drow_row($line2_arr);
  $row3 = drow_row($line3_arr);
  $row4 = drow_row($line4_arr);
  $row5 = drow_row($line5_arr);
  $row6 = drow_row($line6_arr);
  $row7 = drow_row($line7_arr);
  $row8 = drow_row($line8_arr);
  $row9 = drow_row($line9_arr);
  $row_last = drow_row($last_arr);

  echo  $row_start.$row2.$row3.$row4.$row5.$row6.$row7.$row8.$row9.$row_last;
  ?>
  </div>

</body>
</html>
