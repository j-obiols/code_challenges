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


    public function buyRoad(): string {

        if($this->getWoods() >= 1 && $this->getClays() >= 1) {
            $this->setWoods($this->getWoods() - 1);
            $this->setClays($this->getClays() - 1);
            return "Done! For this road you've paid 1 wood and 1 clay.\n";
        } else {
            return "You don't have enough resources to buy a road.\n";
        }
        
    }


    public function buyVillage(): string {

        if($this->getWoods() >= 1 && $this->getClays() >= 1 && $this->getGrains() >= 1 && $this->getWools() >= 1) {
            $this->setWoods($this->getWoods() - 1);
            $this->setClays($this->getClays() - 1);
            $this->setGrains($this->getGrains() - 1);
            $this->setWools($this->getWools() - 1);
            return "Done! For this village you've paid 1 wood, 1 clay, 1 grain and 1 Wool.\n";
        } else {
            return "You don't have enough resources to buy a village.\n";
        }

    }


    public function buyCity(): string {

        if($this->getGrains() >= 2 && $this->getOres() >= 3) {
            $this->setGrains($this->getGrains() - 2);
            $this->setOres($this->getOres() - 3);
            return "Done! For this city you've paid 2 grains and 3 ores.\n";
        } else {
            return "You don't have enough resources to buy a city.\n";
        }

    }


    public function buyDevelomentCard(): string {

        if($this->getGrains() >= 1 && $this->getWools() >= 1 && $this->getOres() >= 1) {
            $this->setGrains($this->getGrains() - 1);
            $this->setWools($this->getWools() - 1);
            $this->setOres($this->getOres() - 1);
            return "Done! For this development card you've paid 1 grain, 1 wool and 1 ore.\n";
        } else {
            return "You don't have enough resources to buy a development card.\n";
        }

    }

} 