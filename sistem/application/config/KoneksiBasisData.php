<?php
@session_start();
error_reporting(0);

class KoneksiBasisData
{
	private $host,
		$database,
		$username,
		$password;

	function __construct()
	{
		$this->host 	= 'localhost';
		$this->database = 'sipd_db';
		$this->username = 'root';
		$this->password = '';
	}

	function execute()
	{
		$open = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);
		return $open;
	}

	function open($host, $database, $username, $password)
	{
		$this->host 	= $host;
		$this->database = $database;
		$this->username = $username;
		$this->password = $password;
	}

	function getResult()
	{
		return $this->host;
		return $this->database;
		return $this->username;
		return $this->password;
	}

	function close()
	{
		$this->execute()->close();
	}

	function __destruct()
	{
	}
}
