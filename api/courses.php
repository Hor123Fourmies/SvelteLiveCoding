<?php

header("Access-Control-Allow-Origin: http://localhost:5000");
header("Access-Control-Allow-Credentials: true");

// $array = ["test1","test2"];
// echo json_encode($array);

session_start();

function generate_courses($amount)
{
    $i = 0;

    if(!$_SESSION['articles']){
        while ($i<$amount)
        {
            $i++;
            //$array[] = "Articles $i";
            $array[]= array(
                "name"=>"Articles $i",
                "purchased"=>false
            );
        }

        $_SESSION['articles'] = $array;
    }

    $articles = $_SESSION['articles'];

    return $articles;
}

$courses = json_encode(generate_courses(15));

echo $courses;

// persistance des données : avec une session et un tableau