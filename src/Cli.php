<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function sayHello()
{
    line("/Welcome to the Brain Games!/\n");
    line("Welcome to the Brain Game!\n");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
