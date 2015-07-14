<?php
include('inc/common.php');

$con = newDbConnection();

$sql = $con->prepare('INSERT INTO user (name, email, contact, password, active) VALUES (?,?,?,?,?)');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = sha1($_POST['password']);
$active = 1;
$sql->bind_param('ssssi', $name, $email, $contact, $password, $active);

if (!$sql->execute()) {
    dd($sql->error);
}

header('location:index.php');
