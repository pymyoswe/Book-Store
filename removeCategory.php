<?php
include ("config.php");
$remCat=$_POST['remCat'];

if($remCat){
    foreach ($remCat as $catId){
        $cat=new BookstoreUser();
        $removeCat=$cat->removeCat($catId);
    }
}

