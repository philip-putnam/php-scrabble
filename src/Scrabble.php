<?php
    class Scrabble
    {
        function scrabbleScore($input)
        {
            $one_points = array('a','e','i','o','u','l','n','r','s','t');
            $two_points = array('d','g');
            $input_letters = str_split(strtolower($input));
            $score = 0;
            foreach ($input_letters as $input_letter) {
                foreach ($one_points as $one_point) {
                    if($input_letter == $one_point) {
                        $score += 1;
                    }
                }
                foreach ($two_points as $two_point) {
                    if($input_letter == $two_point) {
                        $score += 2;
                    }
                }
            }
            return $score;
        }
    }
?>
