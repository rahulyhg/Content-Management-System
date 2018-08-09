<?php

class Database{

	// TODO load from a Dotenv system
	final private $db_username = 'root';
	final private $db_password = '';
	final private $db_tableName = 'cms';
	private $db_connection;

	public function __construct(){
		$this->connection = new mysqli('127.0.0.1', $this->db_username, $this->db_password, $this->db_tableName);
	}

	public function getUser(){
		$user = $this->connection->query('SELECT * FROM users WHERE 1 = 1');
	}

	public function load(array $values){
		foreach($values as $key => $value){
			if(property_exists($this, $key)){
				$this->$key = $value;
			}
		}
	}
}
