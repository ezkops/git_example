<?php
  
  

     

   $obj = new calculator;

   $obj->setA(4);
   $obj->setB(5);
   $obj->getSum() . '<br>';
   $obj->getDivide();
   print_r($obj);
   
   $obj->setA(6);
   $obj->setB(12);
   $obj->getSum();
   $obj->getDivide();

  class calculator {
    public $a;
    public $b;
    public $c;
    public $d;
    function setA($a) {
       $this->a = $a;
    }
    function setB($b) { $this->b = $b; }

    function getSum() { $this->c = $this->a + $this->b; return $this->c; }

    function getDivide() { $this->d = $this->a / $this->b; return $this->d; } 
  }  
?>





