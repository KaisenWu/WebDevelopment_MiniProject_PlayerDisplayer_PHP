<?php

//This Class is to construct our html page.

class Page  {

  public static $title = "Please set the title";

  //Constructor - Set the title when it is passed in __construct($newTitle)  {
  public static function setTitle($title) {

  }

  //This function displays the html header
  public static function htmlHeader($title) { ?>
  <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title><?php echo $title ?></title>
        </head>
        <body>
            <h1><?php echo $title ?></h1>
        <?php   
  }

  //This function displays the html footer
  public static function htmlFooter() { ?>
    </body>
    </html>
    <?php    
  }

  //This function displays the upload form for the CSV file
  public static function showUploadForm() { ?>
    <div class="mb-3">
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" class="form-control" name="csvUpload">
      <input type="submit" value="Upload">
    </form>
    </div>    
    <?php }

  public static function displayTable($playerArray) {
    echo '<table class="table">
          <thead>
          <tr>
          <th scope="col">Player No.</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Position</th>
          <th scope="col">Bats</th>
          <th scope="col">Throw</th>
          <th scope="col">Age</th>
          <th scope="col">Height</th>
          <th scope="col">Weight</th>
          <th scope="col">BirthPlace</th>
          </tr>
          </thead>
          <tbody>';
          foreach($playerArray as $player) {
            echo '<tr>
            <td>'.$player->getNum().'</td>
            <td>'.$player->getFName().'</td>
            <td>'.$player->getLName().'</td>
            <td>'.$player->getPos().'</td>
            <td>'.$player->getBat().'</td>
            <td>'.$player->getThr().'</td>
            <td>'.$player->getAge().'</td>
            <td>'.$player->getHt().'</td>
            <td>'.$player->getWt().'</td>
            <td>'.$player->getBPlace().'</td>
            </tr>';
          }
          echo '</tbody>
                </table>';

  }

  

}