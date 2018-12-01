<?php 

class Buss extends Auto{ 

    private $passenger_in_bus = NULL;
    private $total_passenger = NULL;
    private $bus_is_overload = FALSE;

    public function __construct($total_passenger){
		$this->total_passenger = $total_passenger;
    }

    public function stop($passenger){
        if($this->bus_is_overload){
            return 'Bus is overload';
        }

        if(($this->passenger_in_bus + $passenger) <= $this->total_passenger){
            $this->passenger_in_bus =  $this->passenger_in_bus + $passenger;
            return 'Pasager in bus: ' . $this->passenger_in_bus;
        }
        
        $pasager_left = $this->total_passenger - ($this->passenger_in_bus + $passenger);
        $this->bus_is_overload = true;
        return 'Bus is overload pasager on passengers left(' . $pasager_left . ')';
    }
}