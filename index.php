<?php
require_once "metods.php";
session_start();
if(isset($_POST['clear'])){
  unset($_SESSION['init_fase']);
  unset($_SESSION['person_map']);
  unset($_POST["up"]);

}
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

  if (isset($_SESSION['init_fase'])) {
  $_SESSION['init_fase'] = 0;
} else {
  $_SESSION['init_fase'] = 1;
}
// <!-- -->
// создание карты доработать на генераторе.
// <!-- -->
// $all_map исходная карта уровня.
$all_map = array(array('') );
$all_map = arr_to_map_from_base(init_map(2));

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
//$all_map_drow[$person_y][$person_x] = array("$el_to_array","person");
//добавляем карту персонажа
if($_SESSION['init_fase'] == 1){
  $open_map = array(array('') );
  $open_map = arr_to_map_from_base(init_map(1));
  $_SESSION['person_map'] = $open_map;
  $open_map = open_map($all_map, $person_y, $person_x, $_SESSION['person_map']);
  $_SESSION['person_map'] = $open_map;
}else{
  $open_map = open_map($all_map, $person_y, $person_x, $_SESSION['person_map']);
  $_SESSION['person_map'] = $open_map;
}
// выводим карту
//$drow_map = drow_row($all_map_drow);
$open_map[$person_y][$person_x] = array("$el_to_array","person");
$drow_map = drow_row($open_map);
echo $drow_map;

  ?>
  </div>
  <?php
echo "<div class='nav'>";
echo '<form action="index.php" method="POST">';
nav_drow($el_to_array);
echo '</form>';
echo "</div>";

print_r($_POST);
echo "<br>";

echo '<form action="index.php" method="POST">';
echo '<button type="submit" value="yes" name="clear">restart</button>';
echo '</form>';

echo"<pre>";
print_r($_SESSION);
echo"</pre>";
echo"<br>";




   ?>

</body>
</html>
