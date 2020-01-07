<?php
trait Message{
    function alert(){
        echo $this->message;
    }
}
class Messenger{
    use Message;
    private $message = "This is a Message";

}
$messenger = new Messenger;
$messenger->alert();


?>