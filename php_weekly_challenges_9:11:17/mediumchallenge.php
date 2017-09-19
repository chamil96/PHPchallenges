<!-- MEDIUM:
 Also, it must modify the deck so that those
cards are no longer available to be distributed. -->

<?php
// Let’s bring in the deck code from the past example (your normal challenge).
include 'normalchallenge.php';

$newDeck = (array_keys($deck));

// Create a function that will create a deck of cards, randomize it and then return the deck.
function shuffleDeck($newDeck){
  shuffle($newDeck);
  return($newDeck);
}

$shuffle = shuffleDeck($newDeck);

echo "<pre>";
print_r($shuffle);
echo "</pre>";

// We will now create a function to deal these cards to each user. Modify this function so that
// it returns the number of cards specified for the user.
$cardsDealt = 1;
$numberOfCards = (($shuffled - $cardsDealt) -1);
echo $numbOfCardsToDistribute;
function deal($shuffle, $cardsDealt, $numberOfCards) {
    $playerHand = array();
    echo 'pre: '.count($shuffle);
    $playerHand = array_splice($shuffle, $numberOfCards);
    echo ' post: '.count($shuffle);
    print_r($shuffle);
      echo "<pre>";
      print_r($playerHand);
      echo "<pre>";
}
$deal = deal($shuffle, $cardsDealt, $numberOfCards);
?>
