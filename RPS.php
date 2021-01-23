<?php
$uc = strtolower(trim(readline("What do you choose? Rock, paper, or scissors? Type end to end the game.")));
if ($uc == "rock") {
$choices = ["rock! we tied!","paper! I won!","scissors! you won!"];
} elseif ($uc == "paper") {
$choices = ["paper! we tied!","scissors! I won!","rock! you won"]; 
} elseif ($uc == "scissors) {
$choices = ["scissors! we tied!","rock! I won!","paper! you won!"];
} elseif ($uc == "end") {
echo "Ok";
exit();
} else {
echo "That's not a valid choice!";
exit();
}
$chosen = $choices[rand(0,count($choices) - 1)];
echo "You chose " . $uc . ", I chose " . $chosen;
?>