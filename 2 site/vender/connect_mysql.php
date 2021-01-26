<?php

class connect_mysql
{
	private $connect;
	
	public function __construct()
	{
		return $this->connect = mysqli_connect('localhost', 'root', '', 'library');
	}
	
	public function addToDataBase($email,$password)
	{
		mysqli_query($this->connect, "INSERT INTO `register` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')");
	}
	
	public function autorisateUser($email,$password)
	{
		return mysqli_query($this->connect, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'");
	}
}
