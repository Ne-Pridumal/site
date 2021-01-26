<?php

session_start();
require_once 'connect_mysql.php';


$email  = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$connect = new connect_mysql();

if ($password != $confirm)
{
	$_SESSION['error confirm'] = 'Invalid password';
	header('Location: ../pages/register.php');
}

elseif ($password == $confirm && !is_null($password) && !is_null($confirm)){
	$connect->addToDataBase($email, md5($password));
	header('Location: ../pages/autorisate.php');
}

function write_line()
{
	if ($_SESSION['error confirm'])	{
		echo '<p class="text-center" style="color: red">'.$_SESSION['error confirm'].'</p>';
	}
	else {
		return null;
	}
	unset($_SESSION['error confirm']);
}