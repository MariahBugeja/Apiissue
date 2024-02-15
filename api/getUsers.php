<?php

//set endpoint headers
header('Access-Control-Allow-Orgin:*');
header('Content-Type:application/json');

//initialize Api
include_once('../core/initialize.php');

//create instance of user
$user = new User($db);

//call a function from user instance
$result= $user->read();

$num=$result->rowcount();

if($num>0){
$user_list= array();
$user_list['data']= array();

//while more rows exist, get the new row
while($row = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $user_item=array(
        'id'  => $id,
        'username '=> $username,
        'password'=>$password,
        'email'=> $email
    );
    //add current user into list
    array_push($user_list['data'],$user_item);
    }
    echo json_encode($user_list);
}
else{
    echo json_encode(array('message'=> 'No User found.'));
}