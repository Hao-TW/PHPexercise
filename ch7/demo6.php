<?php
  include "Poodle2.php";

  $mydog = new Poodle("Windy","白色","貴賓狗",30);
  //修改此行
  echo $mydog->Bark();
  echo $mydog->dogBark();
?>