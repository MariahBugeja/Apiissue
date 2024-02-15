<?php

class user{
    //properties for databse stuff
    private $conn;
    private $table='users';

    //properties of users
    public $id;
    public $username;
    public $email;
    public $password;

    //user contstructor 
    public function _construct($db){
        $this->conn = $db;
    }

    //getting user from db
    public function read(){
        //read quety
        $query = 'SELECT*
        FROM' .$this->table.' u
ORDER Bu,username ASC;';

//PRepare statement
$stmt = $this->conn->prepare($query);

//exxecute query
$stmt->execute
return$stmt;
    }

}