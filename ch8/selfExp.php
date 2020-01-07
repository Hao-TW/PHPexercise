<?php
class EmailFormatException extends Excption{
    function printMessage(){
        echo "例外訊息".$this->getMessage()."<br />";

    }
}
function check($email){
    if(!strpos($email,@))
        throw new EmailFormatException("E-mail need inclued'@'");

}
try {
    checkEmail('gmail.com');
  } catch (EmailFormatException $e){
    $e->printMessage();
  }

?>