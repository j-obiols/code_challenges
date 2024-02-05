<?php


class Player {

    protected $name;

    protected $grains = 0;
    protected $clays = 0;
    protected $ores = 0;
    protected $woods = 0;
    protected $wools = 0;


    public function __construct(string $name){
        $this->name = $name;
    }


    public function getName(): string {
        return $this -> name;
    }


    public function getGrains(): int {
        return $this -> grains;
    }


    public function getClays(): int { 
        return $this -> clays;
    }


    public function getOres(): int {
        return $this -> ores;
    }


    public function getWoods(): int {
        return $this -> woods;
    }


    public function getWools(): int {
        return $this -> wools;
    }


    public function setGrains(int $quantity){
      $this -> grains = $quantity;
    }


    public function setClays(int $quantity){
        $this -> clays = $quantity;
    }


    public function setOres(int $quantity){
        $this -> ores = $quantity;
    }


    public function setWoods(int $quantity){
        $this -> woods = $quantity;
    }


    public function setWools(int $quantity){
        $this -> wools = $quantity;
    }


    public function buyProperty($type) {

        $answer1 = "Done! You've paid ";
        $answer2 = "You don't have enough resources to buy a ". $type.".\n";

        switch ($type) {

            case "road":
                if($this->getWoods() >= 1 && $this->getClays() >= 1) {
                    $this->setWoods($this->getWoods() - 1);
                    $this->setClays($this->getClays() - 1);
                    return  $answer1."1 wood and 1 clay.\n";
                } else {
                    return $answer2;
                }
            break; 

            case "village":
                if($this->getWoods() >= 1 && $this->getClays() >= 1 && $this->getGrains() >= 1 && $this->getWools() >= 1) {
                    $this->setWoods($this->getWoods() - 1);
                    $this->setClays($this->getClays() - 1);
                    $this->setGrains($this->getGrains() - 1);
                    $this->setWools($this->getWools() - 1);
                    return  $answer1."1 wood, 1 clay, 1 grain and 1 Wool.\n";
                } else {
                    return $answer2;
                }
            break; 

            case "city":
                if($this->getGrains() >= 2 && $this->getOres() >= 3) {
                    $this->setGrains($this->getGrains() - 2);
                    $this->setOres($this->getOres() - 3);
                    return $answer1."2 grains and 3 ores.\n";
                } else {
                    return $answer2;
                }
            break; 

            case "development card":
                if($this->getGrains() >= 1 && $this->getWools() >= 1 && $this->getOres() >= 1) {
                    $this->setGrains($this->getGrains() - 1);
                    $this->setWools($this->getWools() - 1);
                    $this->setOres($this->getOres() - 1);
                    return $answer1."1 grain, 1 wool and 1 ore.\n";
                } else {
                    return $answer2;
                }
            break; 
        }
    }

} 