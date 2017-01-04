<?php
require_once("datebase.php");
$link = db_connect();
function complete_sel($par){
      if (is_array($par)){
        $temp="<div class=\"".$par[0]."\"><div class='character'></div></div>";
        return $temp;
      }else{
      $temp="<div class=\"".$par."\"></div>";
      return $temp;
    }
}
function inner_character($par){
  $temp = explode('</div>', $par);
  $temp[0] .= "<div class='character'></div></div>";
  $str = '';
  $str = $temp[0];
  return $str;
}
function drow_sell(){
  echo "<div class='square'></div>";
}

function drow_nav(){
  return "hellow";
}

function sell_type_inner($n){
  if (is_array($n)){
     $temp = sell_type_inner($n[0]);
     return array("$temp","person");
  }else{
    switch($n){
      case 0:
      return "smoke";
      break;
      case 1:
      return "square wall_t wall_l wall_b";
      break;
      case 2:
      return "square wall_t wall_r wall_b";
      break;
      case 3:
      return "square wall_l wall_r wall_b";
      break;
      case 4:
      return "square wall_t wall_l wall_r";
      break;
      case 5:
      return "square wall_t wall_b";
      break;
      case 6:
      return "square wall_l wall_r";
      break;
      case 7:
      return "square wall_l";
      break;
      case 8:
      return "square wall_r";
      break;
      case 9:
      return "square wall_b";
      break;
      case 10:
      return "square wall_t";
      break;
      case 11:
      return "square";
      break;
      case 12:
      return "square wall_r wall_b";
      break;
      case 13:
      return "square wall_l wall_b";
      break;
      case 14:
      return "square wall_t wall_r";
      break;
      case 15:
      return "square wall_t wall_l";
      break;
    }
  }
}
function drow_row($arr){
  $row='';
  for($i=0;$i<5;$i++){
    for($y=0;$y<5;$y++){
      $row .= complete_sel(sell_type_inner($arr[$i][$y]));
    }
  }
  return $row;
}

// рисовка напрямую из генератора, возможно...
function add_arr_to_all_map($arr1, $arr2, $arr3, $arr4, $arr5){
  $ret_map = array(array('') );
  for ($i=0; $i < count($arr1); $i++) {
    $ret_map[0][$i] = $arr1[$i];
  }
  for ($i=0; $i < count($arr2); $i++) {
    $ret_map[1][$i] = $arr2[$i];
  }
  for ($i=0; $i < count($arr3); $i++) {
    $ret_map[2][$i] = $arr3[$i];
  }
  for ($i=0; $i < count($arr4); $i++) {
    $ret_map[3][$i] = $arr4[$i];
  }
  for ($i=0; $i < count($arr5); $i++) {
    $ret_map[4][$i] = $arr5[$i];
  }
return($ret_map);
}


function nav_drow($n){
  switch($n){
    case 1:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 2:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 3:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 4:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 5:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 6:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit" >right</button>';
    break;
    case 7:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 8:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 9:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 10:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 11:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 12:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 13:
    echo '<button type="submit" value="up" name="up" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
    case 14:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit" value="left" name="left">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit">right</button>';
    break;
    case 15:
    echo '<button type="submit" class="top_button">up</button>';
    echo '<button type="submit">left</button>';
    echo '<button type="submit" value="down" name="down">down</button>';
    echo '<button type="submit" value="right" name="right">right</button>';
    break;
  }
}

function init_map($id){
  $query = sprintf("SELECT start_arr, line2_arr, line3_arr, line4_arr, last_arr FROM maps WHERE num=%d",$id);
  $link = db_connect();
  $result = mysqli_query($link, $query);
  if(!$result){
    die(mysqli_error($link));
  }
  $result = mysqli_fetch_assoc($result);
  return $result;
}

function arr_to_map_from_base($arr){
  $ret_map = array(array('') );
  $count_num = 0;
  foreach($arr as $key){
    $arr_temp = explode(",", $key);
    for ($i=0; $i < count($arr_temp); $i++) {
      $ret_map[$count_num][$i] = $arr_temp[$i];
    }
    $count_num++;
  }

return($ret_map);
}




 ?>
