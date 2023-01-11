<?php

class TeamParser {

    //The team that the Team parser will use
    public static $team;

    //This function will parse our team data to an array
    public static function parseRoster($fileContents)   {
        //Instantiate a new team
        self::$team = array();    
        //create an array out of each line of the file (split by newline character)
        $rows = explode("\n",$fileContents);
        //Iterating through each line of the file
        for($numOfRows=1; $numOfRows<count($rows); $numOfRows++) {
            //Split the columns up into an array
            $cells = explode(",", $rows[$numOfRows]);
            //to fix the first name and last name
            $names = explode(" ", $cells[1]);
            $firstName = $names[0];
            $lastName = $names[1];
            //Check we have the right amount of columns
            if(count($cells)==9) {
                //Trim out the white space
                foreach($cells as $cell) {
                    $cell = trim($cell);
                }   
                //Instantiate a new Player
                $player = new Player($cells[0], $firstName, $lastName, 
                $cells[2], $cells[3], $cells[4], $cells[5], $cells[6],
                $cells[7], $cells[8]);
                self::$team[] = $player;
            }    
        }
    }
}

?>