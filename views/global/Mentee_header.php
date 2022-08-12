<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Mentor Mentee Management System</title>
  <link rel="stylesheet" href="/resources/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="/resources/CSS/styles.css">
  <link rel="stylesheet" href="/resources//font-awesome/css/font-awesome.min.css">
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">Mentor Mentee Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../mentee/Mentee_dashboard_test.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <?php
      if(isset($_SESSION['userID'])){
        echo "<li class='nav-item'>";
        echo "<a href='../auth/logout.php' class='btn btn-default btn-sm '><i class='fa fa-sign-out icon' id='submit-icon-1'></i>log out</a>";
        echo "</li>";
      }
      ?>

    </ul>
  </div>
  </div>
</nav>

