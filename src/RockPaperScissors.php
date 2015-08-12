<?php
    class RockPaperScissors
    {
        function playGame($player1, $player2)
        {
            if ($player1 == 'rock' && $player2 == 'scissors') {
                return $player1;
            } elseif ($player1 == 'rock' && $player2 == 'paper') {
                return $player2;
            } elseif ($player1 == 'paper' && $player2 == 'scissors') {
                return $player2;        
            } else {
                return $player1 . $player2;
            }
        }
    }
?>
