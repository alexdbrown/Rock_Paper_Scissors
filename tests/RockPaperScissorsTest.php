<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_playGame_saveInputOne()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = null;

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals("rock", $result);
        }

        function test_playGame_saveInputTwo()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = null;
            $player2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals("scissors", $result);
        }


        function test_playGame_rockScissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals('rock', $result);
        }

        function test_playGame_rockPaper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals('paper', $result);
        }

        function test_playGame_paperScissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = 'paper';
            $player2 = 'scissors';

            //Act
            $result = $test_RockPaperScissors->playGame($player1, $player2);

            //Assert
            $this->assertEquals('scissors', $result);
        }
    }
?>
