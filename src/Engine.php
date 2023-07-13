<?php

/**
 * Engine File Doc Comment
 * PHP version 8
 *
 * @category Engine
 * @package  BrainGames
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const GAMES_COUNT = 3;

function startGame($gameAbout, $gameDate)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameAbout);
    foreach ($gameDate as [$question, $correctAnswer]) {
        line("Question: " . $question);
        $answer = prompt('You answer');
        if ($correctAnswer != $answer) {
            line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $correctAnswer . "'.");
            line("Let's try again, " . $name . "!");
            return;
        }
        line("Correct!");
    }
        line("Congratulations, " . $name . "!");
}
