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
// создание карты. доработать на генераторе.
  $start_arr = [1,5,5,10,2];
  $line2_arr = [15,5,5,9,2];
  $line3_arr = [13,10,2,15,2];
  $line4_arr = [1,9,10,9,2];
  $last_arr = [1,5,9,5,2];
// $all_map исходная карта уровня.
  $all_map = array(array('') );
$all_map = add_arr_to_all_map($start_arr, $line2_arr, $line3_arr, $line4_arr, $last_arr);
// карта для персонажа
$person_y = 0;
$person_x = 0;
$all_map_drow = array(array('') );
$all_map_drow = $all_map;
$temp = $all_map_drow[$person_y][$person_x];
$all_map_drow[$person_y][$person_x] = array("$temp","person");

// выводим карту
$drow_map = drow_row($all_map_drow);
echo $drow_map;
  /*$row_start = drow_row($start_arr);
  $row2 = drow_row($line2_arr);
  $row3 = drow_row($line3_arr);
  $row4 = drow_row($line4_arr);
  $row5 = drow_row($line5_arr);


  echo  $row_start.$row2.$row3.$row4.$row5;*/
  ?>
  </div>

</body>
</html>
