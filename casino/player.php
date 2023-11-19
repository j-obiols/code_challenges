<?php

    class Player{

        public string $name;
        public int $totalAmount;
        public bool $inCasino;
        


        public function __construct($name){
            $this -> name = $name;
            $this -> totalAmount = 0;
            $this -> inCasino = false;
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


        public function setInCasino($value) {
            $this -> inCasino = $value;
        }


        public function enters() {

            $inCasino =  $this -> inCasino;
      
            switch($inCasino) {
                case true :
                   echo $this -> getName()." is already in the Casino\n";
                break;

                case false:
                    $this -> setInCasino(true);
                break;
            }   
        }


        public function leaves() {

            if($this -> inCasino) {
               $this -> setInCasino(false);
               $this -> hasWon();
               $this -> resetTotalAmount();
            } else {
                echo $this -> getName()." is not in the Casino\n";
            }

        }


        public function wins($amount){

            if($this -> inCasino){
              $this -> totalAmount += $amount;
            }else{
                echo $this -> getName()." is not in the Casino\n";
            }

        }


        public function isWinning(){

            if($this -> inCasino == true) {
                echo $this -> getName()." is winning ".$this ->  getTotalAmount()."\n";
            }

        }

        public function hasWon(){
            echo $this-> getName()." has won ".$this ->  getTotalAmount()."\n";
        }

    }; 