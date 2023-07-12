<?php

/**
 * Prime File Doc Comment
 * PHP version 8
 *
 * @category Prime
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace Src\Games\Prime;

use function Src\Engine\startGame;

use const Src\Engine\GAMES_COUNT;

const GAME_ABOUT = 'Answer "yes" if given number is prime. Otherwise answer "no".';
/**
 * Is even
 *
 * @param int $num is prime or not prime number
 *
 * @return number
 */
function isPrime($num)
{
    if ($num == 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Is start game
 *
 * @return boolean
 */
function primeStart()
{
    $gameData = [];
    for ($i = 0; $i < GAMES_COUNT; $i++) {
        $randNum = rand();
        $question = $randNum;
        $correctAnswer = (isPrime($randNum)) ? 'yes' : 'no';
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
