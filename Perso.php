<?php

class Perso {
    protected $name;
    protected $life;
    protected $attack;
    protected $defense;

    public function __construct($name) {
        $this->name = $name;
        $this->life = 100;
        $this->attack = rand(20,40);
        $this->defense = rand(10,19);
    }

    public function getName() {
        return $this->name;
    }

    public function getLife() {
        return $this->life;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function setLife($life) {
        $this->life = $life;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function setDefense($defense) {
        $this->defense = $defense;
    }

}
