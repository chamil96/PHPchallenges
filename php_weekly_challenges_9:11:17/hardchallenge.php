


<!-- Use a for loop to add the "dealt hands" to the $players array
Let’s create a simple game. Each player will play a card and whoever has the highest value wins.
If there are 2 cards played that have the same value, everyone loses and that round is a draw.
Store the results of each game and also who won that round as the value.
If the round is a draw, store the value as DRAW. Use a loop to play each game until all opponents are out of cards.
Print out the array of all the rounds. If there was a draw, the round should say DRAW.
If a player has won, it should displayer “Player X” where X is the index of the player. -->

<?php
// Bring in your createDeck and dealCards function from the previous challenges.
include 'normalchallenge.php';

function randomDeck($deck){
  shuffle($deck);
  return $deck;
}

$shuffleDeck = randomDeck($deck);

echo "<pre>";
print_r($shuffleDeck);
echo "</pre>";

$numberOfPlayers = 4;
$players=[
  array(),
  array(),
  array(),
  array()
  ];

  function dealCards($shuffleDeck, $numberOfPlayers){
    $cardsInDeck = count($shuffleDeck);
    $playersCards = ($cardsInDeck / $numberOfPlayers);
    for ($i=0; $i < $numberOfPlayers; $i++) {
      $deckCount = count($shuffleDeck);
      $index = $deckCount - $playersCards;
      $players[$i] = array_splice($shuffleDeck, $index);
    }
    echo "<pre>";
    print_r($players);
    echo "</pre>";

    $results = array();
    $playersHandLength = count($players);

    for ($a=0; $a < 13; $a++) {
      $placeholder = array();
      for ($i=0; $i < 4; $i++) {
        array_push($placeholder, array_shift($players[$i]));
      }
      if (count($placeholder) === count(array_unique($placeholder))) {
        $highestCard = max($placeholder);
        $player = array_search($highestCard, $placeholder);
        array_push($results, "Player ". $player. " won by playing " .$highestCard);
      } elseif (count($placeholder) !== count(array_unique($placeholder))) {
        array_push($results, "Tie!");
      }
    }

    echo "<pre>";
    print_r($placeholder);
    print_r($results);
    echo "<pre>";
  }




  dealCards($shuffleDeck, $numberOfPlayers, $playersCards);



// For the specified number of players below, assign each player an even set of cards.
// We will do this by counting out how many players there are, counting how many cards
//  are in the deck and then dividing them so we know how many cards each player should get.

// */
// $deck =
// $num_players = 4;
// $num_cards_in_deck = //find a function to count the # of elements in an array
// $num_cards_to_give_each_player =
// /*

?>
