<?php

      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "abc";


      $sabjee =  mysqli_connect($server,$username,$password,$database);    
   
      if(isset($_POST["save"])){

       $a =  $_POST["user"];
       $b = $_POST["pass"];

       $chhhota_bhasa =  "insert into user_contact(username,password) values('$a','$b')";

       mysqli_query($sabjee,$chhhota_bhasa);
    
       echo "<script>alert('Registor success !')</script>";
       header("login.html");

      }





?>