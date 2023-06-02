<?php

require 'Perso.php';

class Mage extends Perso
{
    private $sleep;

    public function isSleeping() {
        if ($this->sleep !== null) {
            $currentDateTime = new DateTime();
            if ($currentDateTime < $this->sleep) {
                return true;
            }
        }
        return false;
    }

    public function setSleepUntil(?DateTime $sleepUntil)
    {
        $this->sleep = $sleepUntil;
    }
}

