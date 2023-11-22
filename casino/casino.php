<?php



class Casino{

    private $players = array();


    public function getPlayers() {
        return $this -> players;
    }


    public function addPlayer(Player $player) {
        $this -> players[] = $player;
    }


    public function removePlayer(Player $player) {

        foreach($this->players as $key => $value){
            if($value == $player){
                unset($this -> players[$key]);
            }
        }

    }
    

    public function enters($player) {
    
        if($this -> inCasino($player)) {
            echo $player -> getName()." is already in the Casino\n";
        } else {
            $this -> addPlayer($player);
        }

    }


    public function leaves($player) {

        if( $this -> inCasino($player)){
            $player -> hasWon();
            $player -> resetTotalAmount();
            $this -> removePlayer($player);
        } else {
            echo $player -> getName()." is not in the Casino\n";
        }

    }


    public function wins($player, $amount) {

        if($this -> inCasino($player)){
            $player-> totalAmount += $amount;
        } else {
            echo $player -> getName()." is not in the Casino\n";
        }

    }


    public function inCasino($player) {

        $players = $this -> getPlayers();

        if(in_array($player, $players)){
            return true;
        } else {
            return false;
        }

    }


    function status() {
        
        $players = $this -> getPlayers();

        foreach($players as $player){
           echo $player -> isWinning(); 
        }
    } 

} 