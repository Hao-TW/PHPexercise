<?php
  include  "Shepherd.php";
  $mydog = new Shepherd("peter","棕色","牧羊犬",10);
  echo $mydog->name."<br />";
  echo $mydog->color."<br />";
  echo $mydog->style."<br />";
  echo $mydog->doWork()."<br />";
  //子類別未改寫父類別的方法
  echo $mydog->dogRun()."<br />";
  //print 測試
  print $mydog->name."<br />";
  print $mydog->color."<br />";
  print $mydog->style."<br />";
  print $mydog->doWork()."<br />";
  //子類別未改寫父類別的方法
  printf $mydog->dogRun()."<br />";

?>