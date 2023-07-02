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

namespace Brain\Games\Even;
use function cli\line;
use function cli\prompt;

/**
 * Processes Even game
 * 
 * @return boolean
 */
function evenStart()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $limitTrueAnswers = 3;
    $trueAnswers = 0;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($limitTrueAnswers; $trueAnswers <= $limitTrueAnswers; $trueAnswers++) {
        if ($trueAnswers == $limitTrueAnswers) {
            line("Congratulations, {$name}");
            break;
        }
        $randNumber = rand();
        $result = (($randNumber % 2 ) == 0) ? 'yes' : 'no';
        $answer = prompt("Question: ", $randNumber);
        if ($result == $answer) {
            line("Correct!");
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, {$name}!");
            break;
        }
    }
    
}