<?php
/**
 * Cli File Doc Comment
 * PHP version 8
 * 
 * @category Cli
 * @package  MyPackage
 * @author   Mahmudjon <mahmudjon.sayfiddinov@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://hexlet.io
 */

namespace Src\Cli;
use function cli\line;
use function cli\prompt;

/**
 * Processes welcome user
 * 
 * @return string
 */
function helloUser()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}