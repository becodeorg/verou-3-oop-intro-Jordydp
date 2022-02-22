<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholpercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholpercentage function which returns the alocoholpercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
require "./Beverage.php";
//class beer
class Beer extends Beverage
{
    public string $name;
    public float $alcoholpercentage;
    //Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    public function __construct(string $color, float $price, string $temprature, string $name, float $alcoholpercentage)
    {
        //using
        parent :: __construct($color,$price, $temprature);
        $this ->name = $name;
        $this ->alcoholpercentage = $alcoholpercentage;
    }
    //Make a getAlcoholpercentage function which returns the alocoholpercentage.
    public function getAlcoholpercentage() {

        echo "<br> The alcoholpercentage is {$this->alcoholpercentage}%.<br>";
    }
}

$duvel = new Beer("blond", 3.5," ", "Duvel", 8.5);

//Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
//Make sure that each print is on a different line.
$duvel->getAlcoholpercentage();
echo "{$duvel->alcoholpercentage}";
$duvel ->getInfo();
echo "<br> {$duvel->color}";

Beverage::getAlcoholpercentage();