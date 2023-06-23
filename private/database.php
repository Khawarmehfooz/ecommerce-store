<?php
// require_once('../private/initialize.php');
require_once('db_credentials.php');
function db_connect()
{
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    confirm_db_connect();
    return $conn;
}
function confirm_db_connect()
{
    if (mysqli_connect_error()) {
        $msg = "Error! Database Connection failed." . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}
function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Error! Database query failed");
    }
}
function db_disconnect($conn)
{
    if (isset($conn)) {
        mysqli_close($conn);
    }
}
