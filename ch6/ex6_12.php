<?php
$fruit = "Apple";
switch($fruit){
  case "apple":
    echo "這是 apple";
    break;
  case "banana":
    echo "這是 banana";
    break;
  default:
    echo "打錯字了嗎";
}
?>

<?php
  // 從 1 加到 50 的整數和
  // 以下方式只是為了說明 for 迴圈的使用方式，不是好的程式碼寫法！！
  $sum = 0;
  for ($i = 1; $i <= 50; i++){
      $sum += $i;
  }  
  echo "總合是: $sum";
?>
