<?php

const TOOL_ROCK = 'rock';
const TOOL_PAPER = 'paper';
const TOOL_SCISSORS = 'scissors';

$toolsArray = [
    0 => TOOL_ROCK,
    1 => TOOL_PAPER,
    2 => TOOL_SCISSORS
];

if (isset($_POST['play'])) {
    $playerChoise = $_POST['tool'];
    $pcChoise = rand(0, 2);
    $pcChoise = $toolsArray[$pcChoise];
    echo '<table>';
    echo '<tr><td><img width="200" src="http://localhost/pamokos/Ls6/8pamoka/image/' . $playerChoise .'.jpg"></td><td>VS</td><td ><img width="200" src="http://localhost/pamokos/Ls6/8pamoka/image/' . $pcChoise .'.jpg"></td></tr>';
    echo '</table>';
   
    echo $playerChoise;
    echo '<br>';
    echo $pcChoise;
    echo '<br>';
   
    if($playerChoise == $pcChoise) {
        echo ' Lygiosios';

    } elseif ($playerChoise == 'TOOL_ROCK' && $pcChoise == 'TOOL_SCISSORS') {

        echo 'Laimejote';

    } elseif ($playerChoise == 'TOOL_PAPER' && $pcChoise == 'TOOL_ROCK') {

        echo 'Laimejote';

    } elseif ($playerChoise == 'TOOL_SCISSORS' && $pcChoise == 'TOOL_PAPER') {
        
        echo 'Laimejote';

    } else {
        echo 'Pralaimejote';
    }
}