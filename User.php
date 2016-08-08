<?php
	
	include 'Databases.php';

	class User extends Databases{


		public function register($data){

			extract($data);

			$stmt = $this->conn->prepare("insert into tbl_users (username,password) values (?,?)");
			$stmt->bind_param("ss",$username,$password);


			$query = $stmt->execute();

			return ($query)?true:false;

		}
        
        public function login($data){

           // public $sessid;

        	extract($data);

           // var_dump($data);
           // exit();

          $stmt = $this->conn->prepare("select * from tbl_users where username = ? and password = ?");

        	$stmt->bind_param("ss",$username,$password);
        	
            $query = $stmt->execute();

            $query = $stmt->get_result();

            $count = $query->num_rows;

           // var_dump($count);
           // exit();

            if($count == 1){

             $data = $query->fetch_object();
             // header('location:dashboard.php');
             return $data;
            }
            else{
              return false;
                // echo "invalid username and password";
                // header('location:login.php');
                
            }

        }

        public function isLoggedIn(){

            if(isset($_SESSION['id'])){
              return true;
            }else{
              return false;
            }
        }
		
	}