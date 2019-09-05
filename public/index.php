<?php
include "../config.php";
include "../score.php";

if (!isset($_GET['game'])) die(404);
if (!gameExists($_GET['game'])) die(404);
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo getScore($_GET['game']);
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST['score'])) die("Missing the score!");
    $score = intval($_POST['score']);
    // Do not tell people if lacking verification!
    if ($VERIFY) {
        if (!isset($_POST['verify'])) die(200);
        include "../verify.php";
        if (!verify($_POST['verify'], $_GET['game'])) {
            die(200);
        }
    }
    if (getScore($_GET['game']) >= $score) die(200);
    setScore($_GET['game'], $score);
} else {
    die(404);
}