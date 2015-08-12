<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_playGame_saveInput()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals("rock scissors", $result);
        }

    }
?>
