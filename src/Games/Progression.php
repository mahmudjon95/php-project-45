<?php

/**
 * Progression File Doc Comment
 * PHP version 8
 *
 * @category Progression
 * @package  BrainGames
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\GAMES_COUNT;

const GAME_ABOUT = 'What number is missing in the progression?';
/**
 * Is even
 *
 * @return array
 */
function randProgression()
{
    $countNums = rand(5, 10);
    $randNum = rand(1, 50);
    $randPlusNum = rand(1, 10);
    $endRangeNum = $randNum + $countNums * $randPlusNum;
    $progression = range($randNum, $endRangeNum, $randPlusNum);
    return $progression;
}

/**
 * Is start game
 *
 * @return NULL
 */
function progrStart()
{
    $gameData = [];
    for ($i = 0; $i < GAMES_COUNT; $i++) {
        $randArray = randProgression();
        $randItem = array_rand($randArray);
        $questionArray = $randArray;
        $questionArray[$randItem] = '..';
        $question = implode(' ', $questionArray);
        $correctAnswer = $randArray[$randItem];
        $gameData[] = [$question, $correctAnswer];
    }
    startGame(GAME_ABOUT, $gameData);
}
