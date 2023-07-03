<?php
/**
 * Even File Doc Comment
 * PHP version 8
 * 
 * @category Even
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace Src\Games\Even;
use function Src\Engine\startGame;
use const Src\Engine\GAMES_COUNT;

const GAME_ABOUT = 'Answer "yes" if the number is even, otherwise answer "no".';
/**
 * Is even
 * 
 * @param int $num is even number or not even
 * 
 * @return boolean
 */
function isEven($num)
{
    $result = ($num % 2) === 0 ? true : false;
    return $result;
}
/**
 * Is correct answer
 * 
 * @param boolean $answer     is even number or not even
 * @param int     $randNumber is random nubmer
 * 
 * @return boolean
 */
function isCorrectAnswer($answer, $randNumber)
{
    if (($answer === 'yes' && isEven($randNumber)) || ($answer === 'no' && !isEven($randNumber))) {
        return true;
    } else {
        return false;
    }
}
/**
 * Is start game
 * 
 * @return boolean
 */
function evenStart()
{
    $gameDate = [];
    for ($i=0; $i <= GAMES_COUNT; $i++) {
        $randNumber = rand(1, 30);
        $correctAnswer = isEven($randNumber) ? 'yes' : 'no';
        $question = $randNumber;
        $gameData[] = [$randNumber, $correctAnswer];
    }
    
}
    startGame(GAME_ABOUT, $gameData);