<?php

/**
 * Gcd File Doc Comment
 * PHP version 8
 *
 * @category Gcd
 * @package  BrainGames
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\GAMES_COUNT;

const GAME_ABOUT = 'Find the greatest common divisor of given numbers.';
/**
 * Algoritm for get GCD
 * In php have easy function for find gcd
 * https://www.php.net/manual/ru/function.gmp-gcd.php
 * but I don't use it. :)
 *
 * @param int $a first number
 * @param int $b second numer
 *
 * @return number
 */
function getGcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a = $a - $b;
        } else {
            $b = $b - $a;
        }
    }
        return $a;
}

/**
 * Is start game
 *
 * @return NULL
 */
function gcdStart()
{
    $gameData = [];
    for ($i = 0; $i < GAMES_COUNT; $i++) {
        $firstRandNum = rand(1, 100);
        $secondRandNum = rand(1, 100);
        $correctAnswer = getGcd($firstRandNum, $secondRandNum);
        $question = $firstRandNum . " " . $secondRandNum;
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
