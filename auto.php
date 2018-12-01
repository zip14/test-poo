<?php 
interface IAuto{
	public function move($distination);
	public function rotateLeft();
	public function rotateRight();
}

abstract class Auto implements IAuto{

    public function move($distination){
        return 'Move to:' . $distination;
    }

    public function rotateLeft(){
        return 'rotateLeft';
    }

    public function rotateRight(){
        return 'rotateRight';
    }
}