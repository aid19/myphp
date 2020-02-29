<?php
 class Pult {
    public function start(){
        echo 'start';
}
    public function stop(){
        echo 'stop';
     }
 }
 class TvPult extends Pult {
     public function start(){
         echo 'Tv start';
     }
 }
class DVDPult extends Pult {
    public function start(){
        echo 'Dvd start';
    }
}
?>