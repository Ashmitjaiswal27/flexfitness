<?php
include 'config.php';

if (isset($_REQUEST["submit"])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $date = $_REQUEST['date'];
  $dob = $_REQUEST['dob'];
  $phone = $_REQUEST['phone'];
  $coach = $_REQUEST['coach'];

  $ins = "INSERT into member(id,name,date,dob,phone,coach)VALUES('$id','$name','$date','$dob','$phone','$coach')";
  $query1 = mysqli_query($connection, $ins);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <title>Members</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/back_css/forms.css">
</head>
<body>
   
<!-- navbar starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./index.html">Flex Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./getbilling.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./coach.php">Coach</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="./member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="./receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar ends  -->

<!-- Form starts  -->
<form class="sign-form" id="sign-form">
  <h1 class="form-title">Member Details</h1>
  <p class="form-caption">Please enter the member details</p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Member Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Joining</label>
    <input type="text" name="date" class="form-control" id="inputAddress" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Date of Birth</label>
    <input type="text" name="dob" class="form-control" id="inputAddress2" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Coach Name</label>
    <input type="text" name="coach" class="form-control" id="inputAddress2" placeholder="Coach Name">
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class="form-control" id="submit" placeholder="Submit">
  </div>
</form>
<!-- Form ends  -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>