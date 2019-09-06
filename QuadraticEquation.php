<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    public function __construct($a , $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

    }

    function getDiscriminant(){
        return $delta = ($this->b * $this->b) - 4 * $this->a * $this->c;
    }
    function getRoot1(){
        return $root1 = (-$this->b + pow($this->getDiscriminant(), 0.5))/(2 * $this->a);
    }
    function getRoot2(){
        return $root2 = (-$this->b - pow($this->getDiscriminant(), 0.5))/(2 * $this->a);
    }
    function getRoot3(){
        return $root3 = (-$this->b / (2*$this->a));
    }
    function getRoot4(){
        return "Phương trình vô nghiệm";
    }

}

