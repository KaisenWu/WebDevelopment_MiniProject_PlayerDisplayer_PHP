<?php

class Team  {

    //These are the attributes to store the teamName and the players
    public string $teamName;
    public array $players;

    public function __construct($nTeamName, $nPlayers) {
        $this->teamName = $nTeamName;
        $this->players = $nPlayers;
    }

    //Comparator function by Number
    public function compNum($x,$y) {
        return $x->getNum()<=>$y->getNum();
    }  

    //Function to call the comparator and Sort by Number
    public function sortByNum() {
        usort($this->players, array($this,'compNum'));
    }

    //This function adds a player to the internal array
    public function getPlayers() {
        return $this->players;
    }
    

    //Returns the count of the players
    public function cntPlayers() {
        return count($this->players);
    }

    //Function to set teamName
    
}

?>