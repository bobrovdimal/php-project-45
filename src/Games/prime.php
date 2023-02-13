<?php

namespace BrainGames\Games\prime;

use function BrainGames\Engine\playGame;

define ("DESCRIPTION_PRIME", 'Answer "yes" if given number is prime. Otherwise answer "no".');

function isPrime($number) 
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number; $i++ ) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function startPrime()
{
    $getRoundData = function() {
       $question = rand(1, 101);
       $correctAnswer = isPrime($question) ? "yes" : "no";
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION_PRIME, $getRoundData);
}