<?php
session_start();

   if (isset($_POST['dataArr'])) {

        $_SESSION["Arr"] = $_POST['dataArr'];
      
    echo print_r(explode(",",$_POST['dataArr']));
         
   }else{
      echo "Not Success";

   } 
?>