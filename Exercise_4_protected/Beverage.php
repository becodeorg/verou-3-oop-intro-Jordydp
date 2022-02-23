<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    
    //create properties of class
    protected string $color;
    protected float $price;
    protected string $temperature;
    
    //TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public function __construct(string $color, float $price, string $temperature ='cold'){
        $this ->color = $color;
        $this ->price = $price;
        $this ->temperature = $temperature;
    }
    //TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo() {

        echo "this beverage is {$this->temperature} and  {$this->color} <br>";
    
    }
}
