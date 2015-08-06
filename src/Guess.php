<?php
    class Guess
    {
        private $guess;

        function __construct($guess)
        {
        $this->guess = $guess;
        }

        function setGuess($guess)
        {
        $this->guess = $guess;
        }

        function getGuess()
        {
        return $this->guess;
        }
    }
?>
