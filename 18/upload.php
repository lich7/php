<?php
$dir=$_POST["hdtxt"];
$uploadfile=$dir.$_FILES['upfile']['name'];
move_uploaded_file($_FILES['upfile']['tmp_name'],$uploadfile);
header("location:fm.php?foldername=".$dir);
?>