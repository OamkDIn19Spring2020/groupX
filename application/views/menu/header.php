<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter Example</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/mystyle.css'); ?>">

  </head>
  <body>
    <div class="container">
      <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        echo 'Welcome '.$_SESSION['username'];
      }
      else {
        echo 'Welcome Quest';
      }
      ?>
      <ul>
        <li> <a href="<?php echo site_url('book/show_books'); ?>">Books</a> </li>
        <li> <a href="<?php echo site_url('example/show_name'); ?>">Students</a> </li>
        <li> <a href="<?php echo site_url('login'); ?>">Login</a> </li>
        <li> <a href="<?php echo site_url('login/logout'); ?>">Logout</a> </li>
        <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
          echo '<li> <a href="'.site_url('secret').'">Secret</a> </li>';
        }
        ?>
      </ul>
      <h1>CodeIgniter Example</h1>
