<?php
include 'class-autoload.inc.php';
$name = $_POST["name"];
$lastName = $_POST["lastname"];
$date = $_POST["date"];

$userctrl = new Usersctrl();
$userctrl->createUser($name, $lastName, $date);

