<?php
$id=$_POST["txtID"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];
$username=$_POST["txtUserName"];
$sex=$_POST["rdoSex"];
$birthday=$_POST["datBirthday"];
$education=$_POST["sltEducation"];
$hobby1=$_POST["ckHobby1"];
$hobby2=$_POST["ckHobby2"];
$hobby3=$_POST["ckHobby3"];
$hobby4=$_POST["ckHobby4"];
$suggestion=$_POST["txaSuggestion"];

echo "<br>你的ID为：".$id;
echo "<br>你的密码为：".$pw1;
echo "<br>你的姓名为：".$username;
echo "<br>你的性别为：".$sex;
echo "<br>你的生日为：".$birthday;
echo "<br>你的学历为：".$education;
echo "<br>你的爱好为：".$hobby1." ".$hobby2." ".$hobby3." ".$hobby4;
echo "<br>你的意见为：".$suggestion;
?>