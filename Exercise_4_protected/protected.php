<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

require "./Beverage.php";
//class beer
class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholpercentage;
    //Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    public function __construct(string $color, float $price, string $temprature, string $name, float $alcoholpercentage)
    {
        //using
        parent :: __construct($color,$price, $temprature);
        $this ->name = ucfirst($name);
        $this ->alcoholpercentage = $alcoholpercentage;
    }
    //Make a getAlcoholpercentage function which returns the alocoholpercentage.
    public function getAlcoholpercentage() {

        echo "<br> The alcoholpercentage is {$this->alcoholpercentage}%.<br>";
    }
    public function getColor(){
        return $this->color;
    }
}

$duvel = new Beer("blond", 3.5," ", "Duvel", 8.5);

//Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
//Make sure that each print is on a different line.
echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel ->getInfo()}";
echo "<br> {$duvel->getColor()}";
//Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
// i try Beverage::getAlcoholpercentage();