<?php
include ("config.php");
$catName=$_POST['newCatName'];

if($catName){
    $category=new BookstoreUser();
    $newCat=$category->newCategory($catName);

}
else{
    echo "Please fill category name";
}

