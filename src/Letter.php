<?php

    class Letter
    {
        private $letter;

        function __construct($letter)
        {
        $this->letter = $letter;
        }

        function setLetter($letter)
        {
        $this->letter = $letter;
        }

        function getLetter()
        {
        return $this->letter;
        }

        function save()
        {
            array_push($_SESSION['list_of_guesses'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_guesses'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_guesses'] = array();
        }

    }

?>
