<?php
// навигация
if(isset($_POST["up"])){
  if ($_SESSION['person_y'] == 0) {
    $_SESSION['person_y'] = $_SESSION['person_y'];
  }else{
    $_SESSION['person_y']--;
  }
}
if(isset($_POST["down"])){
  if ($_SESSION['person_y'] == 4) {  // в поле 5 на 5 4 это крайний индекс
    $_SESSION['person_y'] = $_SESSION['person_y'];
  }else {
    $_SESSION['person_y']++;
  }
}
if(isset($_POST["left"])){
  if ($_SESSION['person_x'] == 0) {
    $_SESSION['person_x'] = $_SESSION['person_x'];
  }else{
    $_SESSION['person_x']--;
  }
}
if(isset($_POST["right"])){
  if ($_SESSION['person_x'] == 4) {  // в поле 5 на 5 4 это крайний индекс
    $_SESSION['person_x'] = $_SESSION['person_x'];
  }else{
  $_SESSION['person_x']++;
  }
}




 ?>
