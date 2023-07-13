<?php

/**
 * Prime File Doc Comment
 * PHP version 8
 *
 * @category Prime
 * @package  BrainGames
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\GAMES_COUNT;

const GAME_ABOUT = 'Answer "yes" if given number is prime. Otherwise answer "no".';
/**
 * Is even
 *
 * @param int $num is prime or not prime number
 *
 * @return bolean
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
 * @return NULL
 */
function primeStart()
{
    $gameData = [];
    for ($i = 0; $i < GAMES_COUNT; $i++) {
        $randNum = rand(1, 100);
        (int) $question = $randNum;
        $correctAnswer = (isPrime($randNum)) ? 'yes' : 'no';
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
