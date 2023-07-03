<?php
/**
 * Calc File Doc Comment
 * PHP version 8
 * 
 * @category Calc
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace Src\Games\Calc;
use function Src\Engine\startGame;
use const Src\Engine\GAMES_COUNT;

const GAME_ABOUT = 'What is the result of the expression?';
/**
 * Is even
 * 
 * @param string $symbol is * or + or -
 * @param int    $a      first number
 * @param int    $b      second numer
 * 
 * @return number
 */
function matemExpression($symbol, $a, $b)
{
    switch ($symbol) {
    case "*":
            $result = $a * $b;
        break;
    case "+":
            $result = $a + $b;
        break;
    case "-":
            $result = $a - $b;
        break;
    }
    return $result;
}

/**
 * Is start game
 * 
 * @return boolean
 */
function calcStart()
{
    $gameData = [];
    for ($i=0; $i < GAMES_COUNT; $i++) {
        $matemSymbols = ["*", "+", "-"];
        $randSymb = $matemSymbols[array_rand($matemSymbols, 1)];
        $firstRandNum = rand(1, 30);
        $secondRandNum = rand(1, 30);
        $correctAnswer = matemExpression($randSymb, $firstRandNum, $secondRandNum);
        $question = $firstRandNum . " {$randSymb} " . $secondRandNum;
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
