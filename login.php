<?php
include ("config.php");
$userName=$_POST['logUserName'];
$password=$_POST['logPassword'];

if($userName){
    if($password){

        $users=new BookstoreUser();
        $login=$users->login($userName,$password);

    }else{
        echo "Please fill password!";
    }

}else{
    echo "Please fill user name!";
}