<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */

//Add the required files
require_once("inc/FileAgent.class.php");
require_once("inc/Page.class.php");
// require_once("inc/parserException.class.php");
require_once("inc/Player.class.php");
require_once("inc/Team.class.php");
require_once("inc/TeamParser.class.php");

//Set the title


//Display the Page header
Page::htmlHeader("Player Displayer");
//Show the upload form
Page::showUploadForm();

//Check if there were any files ($_FILES_ uploaded, if there were parse them
if (isset($_FILES) && !empty($_FILES)) {
    
}

    //Instantiate a new Team

    
    
    //Load the contents from the FileAgent static class, pass in the tmp_name
    $fileContent = FileAgent::getFileContent($_FILES["csvUpload"]["tmp_name"]);
    
    //Use the TeamParser and parse the team based on the file contents from the file agent
    TeamParser::parseRoster($fileContent);
    $t = new Team("Hello Rahim!!!!", TeamParser::$team);
    
    
    //Sort the team based on number
    $t->sortByNum();
    
    //Show pass the entire team to the page class for display
    Page::displayTable($t->players);

    Page::htmlFooter();
    $cnt = $t->cntPlayers();
    echo "Total Player Count: $cnt";

    





//Display the page footer
?>
