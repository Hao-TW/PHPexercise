<?php
trait Hello{
    public function sayHello(){
        echo 'Hello';
    
    }
}
trait World{
    public function sayWorld(){
        echo 'world';
    }
}
trait HelloWorld{
    use Hello,World;
}
class myworld{
    use HelloWorld;

}
$world = new MyWorld();
echo $world->sayHello()." ".$world->sayWorld();
?>