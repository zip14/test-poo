<?php 

class Car extends Auto{ 
    
    private $fuel = NULL;   //количество топлива
    private $fuelConsumption = NULL;    //потребление топлива на 100 км
    private $tankIsEmpty = FALSE;    //бак пустой

    public function __construct($fuel, $fuelConsumption){
        $this->fuel = $fuel;
        $this->fuelConsumption = $fuelConsumption;
    }
    
    //метод движение вперед
   public function move($destination){
        if($this->tankIsEmpty){
            return 'Tank is empty';
        }

        //необходимое количество топлива для заданной дистанции
        $fuelForDistantion = ($this->fuelConsumption * $destination) / 100; 

        if($this->fuel > $fuelForDistantion){
            $this->fuel = $this->fuel - $fuelForDistantion;

            return 'Move to ' . $destination . ' <strong>Fuel in tank: </strong>' . $this->fuel . '<strong>Fuel needed for destination: </strong>' . $fuelForDistantion;
        }

        $tankIsEmpty = TRUE;

        return 'Fuil is: ' . $this->fuel . 'but need: ' . $fuelForDistantion ;
    }
}