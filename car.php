<?php 

class Car extends Auto{ 
    
    private $fuel = NULL;
    private $fuel_consumption = NULL;
    private $km_to_move = NULL;

    public function __construct($fuel, $fuel_consumption){
    
        $this->fuel = $fuel;
        $this->fuel_consumption = $fuel_consumption;
    }
    
   public function move($distination){
 
        if(empty($this->fuel)){
            return 'fuil is ' . $this->fuel;
        }

        $fuel_for_distantion = ($this->fuel_consumption * $distination) / 100;

        echo('<strong>' . $this->fuel . '<br>');
        echo($fuel_for_distantion . '<br></strong>');

        if($this->fuel > $fuel_for_distantion){
            $this->fuel = $this->fuel - $fuel_for_distantion;

            return 'move to' . $distination;
        }else{
            return 'Fuil is: ' . $this->fuel . 'but need: ' . $fuel_for_distantin ;
        }
    }
}