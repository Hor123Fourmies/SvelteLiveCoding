<?php

header("Access-Control-Allow-Origin: http://localhost:5000");
header("Access-Control-Allow-Credentials: true");

session_start();

$articles = $_SESSION['articles'];
$contentRaw = (file_get_contents("php://input"));
$content = trim($contentRaw);
$payload = json_decode($content, true);


if(isset($articles))
{
    $name = $payload['name'];
    $_SESSION['articles'][] = array("name"=>$name, "purchased"=>false);
}