<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";



function gcd(int $divider1, int $divider2): int
{
    if ($divider1 % $divider2 === 0) {
        return $divider2;
    }
    return gcd($divider2, $divider1 % $divider2);
}



function start(): void
{
    $getRoundData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $correctAnswer = (string) gcd($num1, $num2);
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
