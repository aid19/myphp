<?php
require_once 'first.php';

class Main{
    public function allRun($tv){
        $tv->start();
        $tv->stop();
    }
}

$m=new Main();
$m->allRun(new TvPult());
echo '<br>';
$m->allRun(new DVDPult());

//$tv=new TvPult();
//$tv->start();
//echo "<br>";
//$tv->stop();
//
//echo "<br>";
//$tv=new DVDPult();
//$tv->start();
//echo "<br>";
//$tv->stop();


?>