<?php

    class Rps
    {
        function rpsGame($player_one, $player_two)
        {
            $lc_one = strtolower($player_one);
            $lc_two = strtolower($player_two);

            if (($lc_one == "rock") && ($lc_two == "paper")) {
                $result = "Player Two Wins!";

            }elseif ($lc_one == "rock" && $lc_two == "scissors") {
                $result = "Player One Wins!";

            }elseif ($lc_one == "paper" && $lc_two == "scissors") {
                $result = "Player Two Wins!";

            }elseif ($lc_one == "paper" && $lc_two == "rock") {
                $result = "Player One Wins!";

            }elseif ($lc_one == "scissors" && $lc_two == "paper") {
                $result = "Player One Wins!";

            }elseif ($lc_one == "scissors" && $lc_two == "rock") {
                $result = "Player Two Wins!";

            }elseif ($lc_one == $lc_two) {
                $result = "It's a draw!";
            }elseif($lc_one != "rock" || $lc_one != "paper" || $lc_one != "scissors" || $lc_two !=
            "rock"|| $lc_two != "paper" || $lc_two != "scissors"){
                $result = "Please enter either rock, paper or scissors";
            }
            return $result;
        }
    }

?>
