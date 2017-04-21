<?php
include ("config.php");

$userName=$_POST['regUserName'];
$password=$_POST['regPassword'];
$conPassword=$_POST['regConPassword'];

if($userName){
    if($password){
        if($conPassword){
            if($password==$conPassword){

                $users=new BookstoreUser();
                $register=$users->register($userName,$password,$conPassword);

            }
            else{
                echo "Your password does not match!";
            }

        }
        else{
            echo "Please confirm your password!";

        }

    }
    else{
        echo "Please fill password";
    }

}
else{
    echo "Please fill user name!";
}
?>
