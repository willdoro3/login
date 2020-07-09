# CodeU index page

<!DOCTYPE html>
<html>
<head>

<title>CodeU</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body style = "background-image: url(images/code.jpg)">

<nav class="navbar navbar-expand-sm bg-light">
    
  <!-- Tabs -->
  <ul class="navbar-nav">
    <li><img src = "images/icon.png" style = "width:50px"></li>
    <li><h3 style = "font-family:cursive; color:#00F9FF; font-weight:bold">CodeU</h3></li>
    <li class="nav-item">
      <a class="active" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Something</a>
    </li>
  </ul>

</nav>

<br><br><br>

<div class = "container">
<div class = "row">
<div class = "col-md-12" style = "background-color:white; text-align:center">
<br><br><h1 style = "font-weight:bold; font-family:cursive">Welcome to CodeU</h1>
<br><img src = "images/icon.png" style = "width:300px">
<br><h4 style = "font-family:cursive">Learn how to Code in Record Time!</h4>

<br><br><br><br>

# This form takes you to the login page if you have an account
<form action = "login.php" method = "POST">
<br><input type = "submit" name = "signin" value = "Sign In" style = "background-color: #b3b3b3; width: 200px; height: 100px; font-size:x-large; font-family: cursive;"><br><br><br>
</form>
<br><br>

# This form takes you to the registration page
<form action = "registration.php" method = "POST">
<input type = "submit" name = "signup" value = "Sign Up" style = "background-color: #b3b3b3; height:100px; width:200px; font-size:x-large; font-family:cursive"><br><br>
</form>
<br><br>

</div>
</div>
</div>

<br><br><br>


</body>
</head>
