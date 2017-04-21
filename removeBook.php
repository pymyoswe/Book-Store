<?php
include ("config.php");
$remBook=$_POST['remBook'];

if($remBook){
    foreach ($remBook as $bookId){
        $book=new BookstoreUser();
        $removeBook=$book->removeBook($bookId);
    }
}
?>