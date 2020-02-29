<?php
abstract class Animals {

    public function legs(){
        echo "4 legs";
    }
    public function eyes(){
        echo "2 eyes";
    }
    public function mouse(){
        echo "1 mouse";
    }

    abstract public function golos();
}

class Dog extends Animals {
public function golos()
{
   echo 'Dog say Gav';
}
}

class Cat extends Animals {
    public function golos()
    {
        echo ' Cat say Meow';
    }
}

$dog = new Dog ;
$dog->golos() ; //Gav
echo "<br>";
$dog->legs();
echo "<br>";
$dog->eyes();
echo "<br>";
$cat = new Cat ;
$cat->golos() ; //Meow
echo "<br>";
$cat->mouse();

?>
