<?php

    $randomNumber = rand(1, 100);
    echo "I'm thinking of a number between 1-100. Try to guess it.\n";
    $guess = readline("> ");

    function guessTheNumber(int $randomNumber, int $guess): string {
        if($guess === $randomNumber){
            return "You guessed it! What are the odds?!?";
        } else if($guess < $randomNumber){
            return "Sorry, you are too low. I was thinking of {$randomNumber}.";
        }
        return "Sorry, you are too high. I was thinking of {$randomNumber}.";
    }

    echo guessTheNumber($randomNumber, $guess);