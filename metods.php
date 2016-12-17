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



 ?>
