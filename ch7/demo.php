<?php
include "dog.php";
$mydog = new dog();
$mydog->age = 12;
print"MY DOG AGE: ".$mydog->getAge();
?>