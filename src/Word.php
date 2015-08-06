<?php
    class Word
    {
        private $word;

        function __construct($word)
        {
        $this->word = $word;
        }

        function setWord($word)
        {
        $this->word = $word;
        }

        function getWord()
        {
        return $this->word;
        }
/* Since we're hard coding the correct word we don't need these.  But if we wanted to have a form
   for someone to enter the word they want to be the answer; we would need these functions.
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
*/
        function numSpaces()
        {
            $n_spaces = strlen($this->word);
            $bool_array = array();
            for($i = 0; $i < $n_spaces; $i++) {
                array_push($bool_array, "_");
            }
            return $bool_array;
        }

        function string2Array()
        {
            $word_array = str_split($this->word);
            return $word_array;
        }
    }


?>
