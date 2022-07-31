<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con,'youtubeuserdata');
$user=$_POST['user'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Comment=$_POST['Comment'];

$query="insert into userinfodata(user,Email,Mobile,Comment) 
value('$user','$Email','$Mobile','$Comment')";

mysqli_query($con ,$query);

header('location:index.php');

?>