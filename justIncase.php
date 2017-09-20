<?php
     // Our Deck of cards
    $deck = array();
    for($i =0; $i<52; $i++){
        $deck[i] = 0;
    }
    // Returns an array of cards per player
    function getHand(){
        // Stores the hand of cards
        $hand = array();
        $score = 0;
        // Circumstance for drawing another card
        while($score<=36){
            $card = rand(1,13);
            $suit = rand(0,3);
            // Converts suit value to string
            switch ($suit) {
                case 0: $suit = "clubs";
                    break;
                case 1: $suit = "diamonds";
                    break;
                case 2: $suit = "hearts";
                    break;
                case 3: $suit = "spades";
                    break;
            }
            $hand[] = $suit;
            $hand[] = $card;
            $score = $score + $card;
            $i++;
        }
        $hand[]=$score;
        return $hand;
    }
    
    // Displays the array of cards per player along with the sum of points
    function displayHand($hand){
        for($i=0; $i<count($hand); $i++) {
            $j=$i+1;
            echo "<img src=img/cards/$hand[$i]/$hand[$j].png>";
            $i++;
        }
        echo $hand[count($hand)-1];
        echo "<br>";
    }
    
    
    
    // Display winner(s) along with points obtained
    function displayWinners($score0, $score1, $score2, $score3){
        
    }
    
    // Play game function
    function playGame(){
         $hand0 = array();
                    $hand0 = getHand();
                    displayHand($hand0);
                    
                    $hand1 = array();
                    $hand1 = getHand();
                    displayHand($hand1);
                    
                    $hand2 = array();
                    $hand2 = getHand();
                    displayHand($hand2);
                    
                    $hand3 = array();
                    $hand3 = getHand();
                    displayHand($hand3);
    }
?>