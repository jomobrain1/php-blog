<?php

 $host="localhost";
 $database="php-blog";
 $password="";
 $user="root";

 $conn=new mysqli($host,$user,$password,$database);

 if($conn->connect_error){
   die("<h1>Database Connection Error</h1>" . $conn->connect_error );
   
 }else{
    // echo "Successfuly connected to database ";
 }