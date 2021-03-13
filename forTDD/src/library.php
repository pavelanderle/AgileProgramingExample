<?php
class Rectangle{
    private $a;
    private $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }

    public function setA($a){
        if ($a>0) {
            $this->a = $a;
        }
    }

    public function setB($b){
        if ($b>0) {
            $this->b = $b;
        }
    }    

    public function getPerimeter(){
    
    }

    public function getArea(){

    }

    public function isSquare(){

    }

    public function getDiagonal(){
        
    }
    
}
?>