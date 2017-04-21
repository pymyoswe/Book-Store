<?php
include ("header.php");
include ("config.php");
?>
<div class="container">

    <?php
    include ("navBar.php")?>

    <nav class="navbar navbar-default" id="book">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">

                    <?php
                    $cat=new BookstoreUser();
                    $showCat=$cat->showCategory();
                    foreach ($showCat as $row){
                        ?>

                            <li><a href="/?cat_id=<?php echo $row['id']?>"><?php echo $row['name']?></a> </li>

                        <?php

                    }
                    ?>



                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="row" id="bookThumb">

        <?php
        $catID=$_GET['cat_id'];
        $book=new BookstoreUser();
        $showBook=$book->diplayBooks($catID);

        foreach ($showBook as $row){
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail clearfix">
                    <img src="bookCover/<?php echo $row['bookCover']?>" class="img-thumbnail" alt="..." width="100px">
                    <div class="caption">
                        <h3><?php echo $row['bookName']?></h3>
                        <p>Author : <?php echo $row['authorName']?></p>
                        <p>Upload Date : <?php echo date('d/m/Y, h:i:A',strtotime($row['created_date']))?></p>
                        <p><a href="bookFile/<?php echo $row['bookFile']?>" target="_blank" name="btnDownload" id="btnDownLoad" class="btn btn-primary btn-sm" role="button"> <span class="glyphicon glyphicon-download"></span> Download</a></p>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>




    </div>



</div>
<script>
    $('#bookThumb').paginate({itemsPerPage: 2});
</script>















<?php
include ("footer.php");
?>
