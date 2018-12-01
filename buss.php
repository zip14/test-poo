<?php 

class Bus extends Auto{ 

    private $passengersInBus = NULL;   //текущее количество пассажиров
    private $maxPassengers = NULL;    //максимальное количество пассажиров
    private $busIsOverload = FALSE;   //перегрузка автобуса

    public function __construct($maxPassengers){
		$this->maxPassengers = $maxPassengers;
    }

    //метод остановки автобуса
    public function stop($passengers = NULL){
        if(empty($passengers)){
            return 'Simple stop ';
        }
        
        if($this->busIsOverload){
            return 'Bus is overload';
        }

        $loadThePasager = $this->openTheDoor();
        $loadThePasager .= '<br>' . $this->loadThePassegers($passengers); 
        $loadThePasager .= '<br>' . $this->closeTheDoor();
        
        return $loadThePasager;
    }

    //метод открытия дверей
    public function openTheDoor(){
        return 'Open the door';
    }

     //метод закрытия дверей
    public function closeTheDoor(){
        return 'Close the door';
    }

    //метод загрузки пассажиров
    public function loadThePassegers($passengers){
        if(($this->passengersInBus + $passengers) <= $this->maxPassengers){
            $this->passengersInBus =  $this->passengersInBus + $passengers;
            return 'Passagers in bus: ' . $this->passengerInBus;
        }
        
        $passengersLeft = $this->maxPassengers - ($this->passengersInBus + $passengers);
        $this->busIsOverload = TRUE;
        
        return 'Bus is overload pasager on passengers left(' . $passengersLeft . ')';
    }
}