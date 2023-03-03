<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

const DESCRIPTION = "What number is missing in the progression?";
const MIN_LENGTH = 5;
const MAX_LENGTH = 10;



function getProgression()
{
    $length = rand(MIN_LENGTH, MAX_LENGTH);
    $base = rand(1, 100);
    $stepProgression = rand(1, 10);
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $base + (($i + 1) * $stepProgression);
    }
    return $progression;
}



function start(): void
{
    $getRoundData = function () {
        $progression = getProgression();
        $hiddenIndex = array_rand($progression);
        $correctAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
