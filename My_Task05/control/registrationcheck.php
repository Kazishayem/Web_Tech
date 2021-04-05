<?php
include('db.php');
session_start();

$error = "";
// store session data
$msg = "";
$validatename = "";
$validateemail = "";
$validatefname = "";
$validatepass = "";
$validatecpass = "";
$validateradio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST["fname"];
    $uname = $_REQUEST["uname"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $cpass = $_REQUEST["cpass"];

    $birthday = $_REQUEST["birthday"];
    $pattern1 = "'/^[a-zA-Z-.-_' ]*$/'";
    $pattern2 = "'/^[a-zA-Z-.-_' ]*$/'";
    $pattern3 = "'/^[a-zA-Z-.-_' ]*$/'";

    if (empty($uname) || empty($email) || empty($fname) || empty($pass) || empty($cpass)) {
        $msg = "All fields are requied";
    } else if ((strlen($uname) < 5)) {
        $msg = "your user name name should be contain 5 characters and alpha numeric characters, period, dash or underscore";
    } else if ((strlen($pass) < 8)) {
        $msg = "your password should be contain 8 characters";
    } else if (strpos($email, "@") === false) {
        $msg = "Email address must contain @";
    } else if (!isset($_REQUEST["gender"])) {
        $msg = "you have to select gender";
    } else if ($pass != $cpass) {
        $msg = "you have to write both password correctly";
    } else if (!isset($_REQUEST["birthday"])) {
        $msg = "you have to select birthday";
    } else {
        $gender = $_REQUEST["gender"];
        $connection = new db();
        $conobj = $connection->OpenCon();

        // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
        $connection->InsertUser($conobj, "registration", $fname, $uname, $email, $pass, $birthday, $gender);
        $connection->CloseCon($conobj);
    }
}