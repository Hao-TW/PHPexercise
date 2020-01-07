<?php
trait Game{
    function play(){
        echo 'Playing a game';
    }
}
trait Music{
    function play(){
        echo 'Playing a music';
    }
}
class Player{
    use Game,Music{
        Game::play as gamePlay;
        Music::play instanceof Game;
    }
}
$player = new Player();
$player->play();
$player->gamePlay();

?>