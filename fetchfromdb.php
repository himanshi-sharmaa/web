<?php

 $link=mysqli_connect("localhost","root","","himi");
 if($link==false){
     die("Error while connecting.".mysqli_connect_error());
 }else{
     echo "connected successfully.".mysqli_get_host_info($link);
 }
 if(isset($_POST['submit'])){
     $reg=$_POST['reg'];
     $sql="Select * from himi where regno='$reg'";
     $result=mysqli_query($link, $sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo "Name".$row['name'];
         }
     }
    
 }
?>