<?php

 $link=mysqli_connect("localhost","root","","himi");
 if($link==false){
     die("Error in connectivity:".mysqli_connect_error($link));
 }else{
     echo "Connected successfully.";
 }

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $regno=$_POST['regno'];
    $mob=$_POST['phoneno'];
    
    $sql="Insert into himi (name,regno,mob) values ('$name','$regno','$mob')";
    if(mysqli_query($link,$sql)){
        echo "data inserted successfully.";
    }else{
        echo "error while inserting data...".mysqli_error();
    }
}
?>