<?php

header("Access-Control-Allow-Origin: http://localhost:5000");
header("Access-Control-Allow-Credentials: true");

session_start();

$articles = $_SESSION['articles'];
$content = trim(file_get_contents("php://input"));
$payload = json_decode($content, true);

if(isset($articles))
{
    $index = $payload['index'];
    $purchased = $payload['purchased'];
    $_SESSION['articles'][$index]['purchased'] = $purchased;
}