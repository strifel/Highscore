<?php
function getScore($game) {
    if (!secureGameName($game)) return 0;
    $score =  file_get_contents("../score/" . $game . ".score");
    return intval($score);
}

function gameExists($game) {
    if (!secureGameName($game)) return false;
    return file_exists("../score/" . $game . ".score");
}

function setScore($game, $score) {
    if (!secureGameName($game)) return false;
    if (!is_int($score)) return false;
    return file_put_contents("../score/" . $game . ".score", strval($score));
}

function secureGameName($game) {
    if (strpos($game, ".") != false) return false;
    if (strpos($game, "/") != false) return false;
    if (preg_match('/[[:cntrl:]]/', $game)) return false;
    return true;
}