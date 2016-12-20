<?php

function complete_sel($par){
      $temp="<div class=\"".$par."\"></div>";
      return $temp;
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
function drow_row($arr){
  $row='';
  $base_arr= $arr;

  for($i=0;$i<=9;$i++){
    $row .= complete_sel(sell_type_inner($base_arr[$i]));
  }
  return $row;
}


 ?>
