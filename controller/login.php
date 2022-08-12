<?php
//var_dump("helo");
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:views/dashboard.php");
      exit();
  }
  // Include database connectivity
    
  include_once('../db/db_connection.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $conn->real_escape_string($_POST['employee_ID']);
      $password = $conn->real_escape_string($_POST['password']);
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM admins WHERE username = '$username'";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location:views/dashboard.php");
            die();                              
        }else{
          $errorMsg = "No user found on this username";
          echo $errorMsg;
        } 
    }else{
      $errorMsg = "Username and Password is required";
      echo $errorMsg;
    }
  }
?>