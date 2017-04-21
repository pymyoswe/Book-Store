<?php
include ("config.php");
$bookName=$_POST['bookName'];
$authorName=$_POST['authorName'];
$bookCatId=$_POST['bookCatId'];
$bCoverName=$_FILES['bookCover']['name'];
$bCoverTmp=$_FILES['bookCover']['tmp_name'];
$bFileName=$_FILES['bookFile']['name'];
$bFileTmp=$_FILES['bookFile']['tmp_name'];

if($bookName){
    if($authorName){
        if ($bookCatId){
            if($bCoverName){
                if($bFileName){
                    move_uploaded_file($bCoverTmp,"bookCover/$bCoverName");
                    move_uploaded_file($bFileTmp,"bookFile/$bFileName");
                    $book=new BookstoreUser();
                    $addNewBook=$book->addNewBook($bookName,$authorName,$bCoverName,$bFileName,$bookCatId);
                }
            }
        }
    }
}
