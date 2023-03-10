<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playGame;

const DESCRIPTION = "What is the result of the expression?";
const SIGNS = ['+', '-', '*'];



function getCorrectAnswer(int $num1, int $num2, string $sign)
{
    switch ($sign) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new \Exception('Unknown sign!');
    }
}



function start(): void
{
    $getRoundData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $sign = SIGNS[array_rand(SIGNS)];
        $question = "$num1 $sign $num2";
        $correctAnswer = (string) getCorrectAnswer($num1, $num2, $sign);
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
