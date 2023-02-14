<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const GAMEROUNDS = 3;

function playGame(string $description, callable $getRoundData)
{
    line("/$description/\n");
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("$description\n");
    for ($i = 1; $i <= GAMEROUNDS; $i++) {
        [$question, $correctAnswer] = $getRoundData();
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
    line("Congratulations, $name!");
}
