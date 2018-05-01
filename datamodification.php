<?php

 $link=mysqli_connect("localhost","root","","himi");
 if($link==false){
     die("Error while connecting.".mysqli_connect_error());
 }else{
     echo "connected successfully.".mysqli_get_host_info($link);
 }
 if(isset($_POST['submit'])){
     $reg=$_POST['reg'];
     $sql="update himi Set name='himanshi' where regno='$reg'";
     $result=mysqli_query($link, $sql);
     
     if($result){
         echo "data modified successfully";
     }else{
         echo "error in the modification of data".mysqli_error($link);
     }
    
 }
?>