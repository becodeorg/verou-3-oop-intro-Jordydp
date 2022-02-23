<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//class beverage
class Beverage {
    
    //create properties of class
    private string $color;
    private float $price;
    private string $temperature;
    
    //TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public function __construct(string $color, float $price, string $temperature ='cold'){
        $this ->color = $color;
        $this ->price = $price;
        $this ->temperature = $temperature;
    }
    //TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo() {

        return "this beverage is {$this->temperature} and  {$this->color}";
    
    }
    public function getTemprature(){
        return "The temprature is {$this->temperature}";
    }
    public function setPrice(){
        $this->price = 3.5;
        echo $this->price;
    }
}

$cola = new Beverage("black", 2 , "cold");

//TODO: Print the temperature on the screen.
echo $cola->getInfo();
echo "<br> {$cola->getTemprature()} <br>";
$cola->setPrice();
