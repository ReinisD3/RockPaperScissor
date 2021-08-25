<?php


$options = ['Rock','Paper','Scissors'];



$gameOn = true;
while ($gameOn)
{
    echo "Welcome to Rock-Paper-Scissors!".PHP_EOL;
    echo "Enter 1 to take Rock ".PHP_EOL;
    echo "Enter 2 to take Paper ".PHP_EOL;
    echo "Enter 3 to take Scissors ".PHP_EOL;
    $choice = readline(">");
    $choice = (int) $choice;
    if (!isset($options[$choice-1]))
    {
        echo "Invalid input , Please choose from 1-3".PHP_EOL;
        continue;
    }
    echo "You choose {$options[$choice-1]}".PHP_EOL;

    $computerChoice = rand(1,3);

    echo "Computer choose {$options[$computerChoice-1]}".PHP_EOL;

    if($choice === $computerChoice)
    {
        echo "Undecided both choose {$options[$choice-1]} ";
    }
    elseif ($choice === 1 )
    {
       echo $computerChoice === 2 ? "Paper beat your Rock" : "Your Rock beats Scissors";
    }
    elseif ($choice === 2 )
    {
       echo $computerChoice === 3 ? "Scissors beat your Paper" : "Your Paper beats Rock";
    }
    elseif ($choice === 3 )
    {
       echo $computerChoice === 1 ? "Rock beat your Scissors" : "Your Scissors beats Paper";
    }
    echo PHP_EOL;

    $gameOn = false;


}