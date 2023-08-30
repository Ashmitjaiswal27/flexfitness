<?php
// if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
//     header('Access-Control-Allow-Origin: *');
//     header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
//     header('Access-Control-Allow-Headers: token, Content-Type');
//     header('Access-Control-Max-Age: 1728000');
//     header('Content-Length: 0');
//     header('Content-Type: text/plain');

//     // printf("done");
//     die();
// }

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if ($username == "admin" && $password == "password") {
        $response = new stdClass();
        $response->success = true;

        $myJSON = json_encode($response);
        echo $myJSON;

    } else {
        $response = new stdClass();
        $response->success = false;

        $myJSON = json_encode($response);
        echo $myJSON;
    }
}


?>
