<?php
/**
 * Gcd File Doc Comment
 * PHP version 8
 * 
 * @category Gcd
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace Src\Games\Gcd;
use function Src\Engine\startGame;
use const Src\Engine\GAMES_COUNT;

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
    if ($a % $b === 0) {
        return $b;
    } elseif ($b % $a === 0) {
        return $a;
    } else {
        while ($a != $b) {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }
        return $a;
    }
}

/**
 * Is start game
 * 
 * @return boolean
 */
function gcdStart()
{
    $gameData = [];
    for ($i=0; $i < GAMES_COUNT; $i++) {
        $firstRandNum = rand(1, 100);
        $secondRandNum = rand(1, 100);
        $correctAnswer = getGcd($firstRandNum, $secondRandNum);
        $question = $firstRandNum . " " . $secondRandNum;
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
