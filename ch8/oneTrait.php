<?php
class Base{
    public function sayhello(){
        echo 'Hello';
    }
}
trait SayWorld{
    public function sayhello(){
        parent::sayhello();
        echo 'World';

    }
}
class MyHelloWorld extends Base{
    use SayWorld;
}
$o = new MyHelloWorld();
$o->sayhello();

?>