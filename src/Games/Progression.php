<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

const DESCRIPTION_PROG = "What number is missing in the progression?";
const MINLENGTH = 5;
const MAXLENGTH = 10;

function getProgression()
{
    $length = rand(MINLENGTH, MAXLENGTH);
    $base = rand(1, 100);
    $stepProgression = rand(1, 10);
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $base + (($i + 1) * $stepProgression);
    }
    return $progression;
}

function startProg()
{
    $getRoundData = function () {
        $progression = getProgression();
        $hiddenIndex = array_rand($progression);
        $correctAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION_PROG, $getRoundData);
}
