<?php

/**
 * Calc File Doc Comment
 * PHP version 8
 *
 * @category Calc
 * @package  BrainGames
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\startGame;
use function cli\line;

use const BrainGames\Engine\GAMES_COUNT;

const GAME_ABOUT = 'What is the result of the expression?';

/**
 * Function for brain-calc
 *
 * @param mixed $symbol mathematical operation
 * @param mixed $a      first number
 * @param mixed $b      second number
 * 
 * @return void
 */
function calculate($symbol, $a, $b)
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
            default:    
                throw new \Exception("Error in function! Check calculate and calcStart.");
        }
    
        return $result;
}

/**
 * Funtion for brain-calc
 *
 * @return void
 */
function calcStart()
{
    try {
        $gameData = [];
        for ($i = 0; $i < GAMES_COUNT; $i++) {
            $matemSymbols = ["*", "+", "-"];
            $randSymb = $matemSymbols[array_rand($matemSymbols, 1)];
            $firstRandNum = rand(1, 30);
            $secondRandNum = rand(1, 30);
            $correctAnswer = calculate($randSymb, $firstRandNum, $secondRandNum);
            $question = "$firstRandNum $randSymb $secondRandNum";
            $gameData[] = [$question, $correctAnswer];
        }
        startGame(GAME_ABOUT, $gameData);
    } catch (\Exception $e) {
        line($e->getMessage());
    }
}
