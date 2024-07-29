<?php
$_POST = json_decode( file_get_contents("php://input"), true );
$newFile = "../../temp.html";

if ($_POST["html"]) {
    $handle = file_put_contents($newFile, $_POST["html"]);
    if (!$handle) {
        header("HTTP/1.0 401 Not Allowed");
    }
} else {
    header("HTTP/1.0 400 Bad Request");
}