<?php

	class Databases{


		private $hostname = 'localhost';
		private $hostuser = 'root';
		private $hostpass = '';
		private $dbname = 'db_institute';

		public $conn;

		public function __construct(){
			$this->connection();
		}

		public function connection(){

			$this->conn = new mysqli($this->hostname,$this->hostuser,$this->hostpass,$this->dbname);
			return ($this->conn)?$this->conn:false;
		}



	}