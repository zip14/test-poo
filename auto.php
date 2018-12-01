<?php 
interface IAuto{
	public function move($distination);
	public function rotateLeft();
	public function rotateRight();
}

// класс родитель
abstract class Auto implements IAuto{

    //метод движение вперед
    public function move($distination){
        return 'Move to:' . $distination;
    }

    //метод поворот на лево
    public function rotateLeft(){
        return 'rotateLeft';
    }

    //метод поворот на право
    public function rotateRight(){
        return 'rotateRight';
    }
}