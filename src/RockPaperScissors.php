<?php
    class RockPaperScissors
    {
        function playGame($player1, $player2)
        {

            if ($player1 == $player2) {
                return "Draw. Play again!";
            }elseif ($player1 == 'rock' && $player2 == 'scissors') {
                return 'Player 1 wins!';
            } elseif ($player1 == 'rock' && $player2 == 'paper') {
                return 'Player 2 wins!';
            } elseif ($player1 == 'paper' && $player2 == 'scissors') {
                return 'Player 2 wins!';
            } elseif ($player1 == 'scissors' && $player2 == 'rock') {
                return 'Player 2 wins!';
            } elseif ($player1 == 'paper' && $player2 == 'rock') {
                return 'Player 1 wins!';
            } elseif ($player1 == 'scissors' && $player2 == 'paper') {
                return 'Player 1 wins!';
            } else {
                return $player1 . $player2;
            }

        }
    }
?>
