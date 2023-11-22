<?php

    class Player{

        public string $name;
        public int $totalAmount;
       

        public function __construct($name){
            $this -> name = $name;
            $this -> totalAmount = 0;
            
        }


        public function getName(){
            return $this -> name;
        }


        public function getTotalAmount(){
            return $this -> totalAmount;
        }


        public function resetTotalAmount() {
            $this -> totalAmount = 0;
        }


        public function isWinning(){
            echo $this -> getName()." is winning ".$this ->  getTotalAmount()."\n";
        }

        
        public function hasWon(){
            echo $this-> getName()." has won ".$this ->  getTotalAmount()."\n";
        }

    }; 