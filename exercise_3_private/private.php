<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

require "./Beverage.php";
//class beer
class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;
    //Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    private function __construct(string $color, float $price, string $temprature, string $name, float $alcoholpercentage)
    {
        //using
        parent :: __construct($color,$price, $temprature);
        $this ->name = ucfirst($name);
        $this ->alcoholpercentage = $alcoholpercentage;
    }
    //Make a getAlcoholpercentage function which returns the alocoholpercentage.
    private function getAlcoholpercentage() {

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
//Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
// i try Beverage::getAlcoholpercentage();