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

echo "<br>���IDΪ��".$id;
echo "<br>�������Ϊ��".$pw1;
echo "<br>�������Ϊ��".$username;
echo "<br>����Ա�Ϊ��".$sex;
echo "<br>�������Ϊ��".$birthday;
echo "<br>���ѧ��Ϊ��".$education;
echo "<br>��İ���Ϊ��".$hobby1." ".$hobby2." ".$hobby3." ".$hobby4;
echo "<br>������Ϊ��".$suggestion;
?>