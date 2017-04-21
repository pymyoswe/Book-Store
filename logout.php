<?php
include ("auth.php");
unset($_SESSION['login']);
header("location:index.php");