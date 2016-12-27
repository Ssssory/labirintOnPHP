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
  session_start();
  if (isset($_SESSION['init_fase'])) {
  $_SESSION['init_fase'] = 0;
} else {
  $_SESSION['init_fase'] = 1;
}
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
require_once("logic.php");
if($_SESSION['init_fase'] == 1){
  $_SESSION['person_y'] = 0;
  $_SESSION['person_x'] = 0;
  $person_y = $_SESSION['person_y'];
  $person_x = $_SESSION['person_x'];
}else{
  $person_y = $_SESSION['person_y'];
  $person_x = $_SESSION['person_x'];
}
$all_map_drow = array(array('') );
$all_map_drow = $all_map;
$el_to_array = $all_map_drow[$person_y][$person_x];
$all_map_drow[$person_y][$person_x] = array("$el_to_array","person");

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
  <?php
echo "<div class='nav'>";
echo '<form action="index.php" method="POST">';
echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
echo '<button type="submit" value="left" name="left">left</button>';
echo '<button type="submit" value="down" name="down">down</button>';
echo '<button type="submit" value="right" name="right">right</button>';
echo '</form>';
echo "</div>";

print_r($_POST);
echo "<br>";
print_r($_SESSION);


   ?>

</body>
</html>
