<?php

class Player {
    //Player attributes
    public string $num;
    public string $fName;
    public string $lName;
    public string $pos;
    public string $bat;
    public string $thr;
    public string $age;
    public string $ht;
    public string $wt;
    public string $bPalce;

    //Constructor
    public function __construct($nNum, $nFName, $nLName, $nPos,
                                $nBat, $nThr, $nAge, $nHt, $nWt, 
                                $nBPlace) 
    {
        $this->num = $nNum;
        $this->fName = $nFName;
        $this->lName = $nLName;
        $this->pos = $nPos;
        $this->bat = $nBat;
        $this->thr = $nThr;
        $this->age = $nAge;
        $this->ht = $nHt;
        $this->wt = $nWt;
        $this->bPalce = $nBPlace;
    } 
    //toString will print of the player is echoed or printed.
    

    public function getNum() {
        return $this->num;
    }
    public function getFName() {
        return $this->fName;
    }
    public function getLName() {
        return $this->lName;
    }
    public function getPos() {
        return $this->pos;
    }
    public function getBat() {
        return $this->bat;
    }
    public function getThr() {
        return $this->thr;
    }
    public function getAge() {
        return $this->age;
    }
    public function getHt() {
        return $this->ht;
    }
    public function getWt() {
        return $this->wt;
    }
    public function getBPlace() {
        return $this->bPalce;
    }

}
?>