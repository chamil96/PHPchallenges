<!-- NORMAL:
EX: “King of Spades” should be one of the elements of the array and it should have a value of 13.
  */
  $suits = array ("clubs", "diamonds", "hearts", "spades");
  $faces = array (
  "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
  "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13);
  $deck = array();
  */ -->

<?php

  // Indexed array without key
  $suits = array ("spades" , "clubs", "diamonds", "hearts" );

  // Simple array with key
  $faces = array (
    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
    "8" => 8, "9" => 9, "10" => 10, "Jack" => 10, "Queen" => 10, "King" => 10);

  // Master array of 52 cards
  $deck = array();

  // Use two foreach loops to create a master array of all 52 cards in the array $deck
  // each represented as a key value pair in the format ‘face of suit’

  foreach($suits as $suit){
    foreach($faces as $face => $value){
      $deck["$face of $suit"] = $value;
    }
  }
  echo "<pre>";
  print_r($deck);
  echo "</pre>";

  // use the print_r function to print out the contents of the $deck to make sure it is correct.
  ?>
