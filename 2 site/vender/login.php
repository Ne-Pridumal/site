<?php
session_start();
require_once 'connect_mysql.php';

$email  = $_POST['email'];
$password = md5($_POST['password']);
$autorisate = new connect_mysql();

if (mysqli_num_rows($autorisate->autorisateUser($email,$password)) == 1)
{
	header('Location: ../pages/main.php');
}

elseif(!is_null($email) && !is_null($password) && mysqli_num_rows($autorisate->autorisateUser($email,$password)) != 1)
{
	header('Location: ../pages/autorisate.php');
	$_SESSION['message'] = 'Invailed email or password';
}

function write_line()
{
	if ($_SESSION['message'])	{
		echo '<p class="text-center" style="color: red">'.$_SESSION['message'].'</p>';
	}
	else {
		return null;
	}
	unset($_SESSION['message']);
}