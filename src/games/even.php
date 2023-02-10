<?php

namespace BrainGames\games\even;

use function BrainGames\Enginegame\playGame;

const DESCRIPTION = "Answer \"yes\" if number even otherwise answer \"no\".";

function isEven($num): bool
{
    return $num % 2 === 0;
}

function start(): void
{
    $getNubmerAndAnswer = function (): array {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getNubmerAndAnswer);
}
