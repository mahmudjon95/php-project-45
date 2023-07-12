<?php

/**
 * Engine File Doc Comment
 * PHP version 8
 *
 * @category Engine
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const GAMES_COUNT = 3;
/**
 * Processes welcome user
 *
 * @param string $gameAbout is description game
 * @param array  $gameDate  is result game
 *
 * @return void
 */
function startGame($gameAbout, $gameDate)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameAbout);
    foreach ($gameDate as [$question, $correctAnswer]) {
        $answer = prompt("Question: ", $question);
        if ($correctAnswer != $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line("Correct!");
        }
    }
        line("Congratulations, {$name}");
}
