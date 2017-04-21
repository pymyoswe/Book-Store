<?php
session_start();

    class BookstoreUser{
        public function __construct()
        {
            try{
                $this->db=new PDO('mysql:host=localhost;dbname=Bookstore','root','root');
            }catch (PDOException $e){
                die($e);
            }
        }

        public function login($userName,$password){

           $canlogin=$this->db->query("SELECT * FROM Users WHERE name='$userName'");
           $res=$canlogin->fetch(PDO::FETCH_ASSOC);

           if($res['name']){
               if($res['password']==md5($password)){

                   echo "Login success!";
                   $_SESSION['login']=$userName;

           }
           else{
                   echo "Password incorrect!";

           }

           }
           else{
               echo "User name not found!";
           }





        }

        public function register($userName,$password){
            $enPw=md5($password);
            $res=$this->db->query("INSERT INTO Users(name,password,created_date) VALUES ('$userName','$enPw',now())");
            if($res){
                echo "Register success!";
                $_SESSION['login']=$userName;
            }else{
                echo "Register failed!";
            }

        }

        public function newCategory($catName){
            $res=$this->db->query("INSERT INTO catagory(name,created_date) VALUES ('$catName',now())");
            if($res){
                echo "Successfully added!";
            }
            else{
                echo "Failed!";
            }

        }

        public function showCategory(){
            $res=$this->db->query("SELECT * FROM catagory");
            return $res;
        }

        public function removeCat($catId){
            $this->db->query("DELETE FROM catagory WHERE id IN ($catId)");
            header("location:template/category.php");
        }

        public function removeBook($bookId){
            $this->db->query("DELETE FROM Books WHERE id IN ($bookId)");
            header("location:template/book.php");
        }

        public function showCatId(){
          return   $this->db->query("SELECT * FROM catagory");
        }

        public function addNewBook($bookName,$authorName,$bCoverName,$bFileName,$bookCatId){

            $res=$this->db->query("INSERT INTO Books(bookName,authorName,bookCover,bookFile,cat_id,created_date) VALUES('$bookName','$authorName','$bCoverName','$bFileName','$bookCatId',now()) ");
            if($res){
                header("location:template/book.php");
            }
        }

        public function showBooks(){
            $res=$this->db->query("SELECT * FROM Books");
            return $res;

        }

        public function diplayBooks($catID){
            if($catID){
                $res=$this->db->query("SELECT * FROM Books WHERE cat_Id IN ($catID)");
                return $res;

            }else{
                $res=$this->db->query("SELECT * FROM Books");
                return $res;

            }

        }



    }
?>