<?php
include_once('../db/db_connection.php');
session_start();
?>

<?php
    if($_POST){
        $error_msg = '';
        $password = ($_POST['password']);
        $username1 = ($_POST['employee_ID']);
        $username2 = ($_POST['Roll_no']);
        if (!empty($username1) && !empty($password)) {
            $query  = "SELECT * FROM mentor WHERE Employee_ID = '$username1'";
            $result = $conn->query($query);
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                if(strcmp($password, $row['Password'])==0){
                  $_SESSION['userID']=$username1;
                  header("Location:/views/mentor/Mentor_dashboard_test.php?employee_ID=$username1");
                }else{
                  echo "<script>alert('Wrong Credentials');window.location.href='../views/auth/login_test.php'</script>";
                }                               
            }else{
              echo "<script>alert('No user found');window.location.href='../views/auth/login_test.php'</script>";
              
            } 
        } elseif(!empty($username2) && !empty($password)) {
            echo $username2;
              $query = "SELECT * FROM mentee WHERE Roll_no ='$username2'";
              $result = $conn->query($query);
              if($result->num_rows>0){
                  $row = $result->fetch_assoc();
                  if(strcmp($password,$row['Password'])==0){
                    $_SESSION['userID']=$username2;
                  header("Location:/views/mentee/Mentee_dashboard_test.php?Roll_no=$username2");
              }else{
                  echo "<script>alert('Wrong Credentials');window.location.href='../views/auth/login_test.php'</script>";
              }
          }else{
            echo "<script>alert('No user found');window.location.href='../views/auth/login_test.php'</script>";
              
          }
      }else{
        echo "<script>alert('User ID and Password is required');window.location.href='../views/auth/login_test.php'</script>";
        }
      }  
?>
