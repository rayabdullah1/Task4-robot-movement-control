<?php


$con = mysqli_connect("localhost", "root", '', "movdb");


if (mysqli_connect_errno()) {
    die('failed to connect' . mysqli_connect_error());
}

$direction = $_POST['direction'];

$qry = $con->prepare("INSERT INTO movement (Direction) VALUES ('" . $direction . "')");


if ($qry->execute()) {
    echo "Success";
} else {
    echo "Failed";
}