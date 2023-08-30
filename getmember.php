<?php

include 'config.php';


$ins = "SELECT * FROM member";
$query1 = mysqli_query($connection, $ins);
// $rows_member = $query1->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/back_css/forms.css">
    <link rel="stylesheet" href="assets/back_css/dashboard.css">
    <link rel="stylesheet" href="assets/back_css/tables.css">
  </head>
  <body>

    <!-- navbar starts -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="./index.html">Flex Fitness</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./getbilling.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./billing.php">Billing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./coach.php">Coach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="./member.php">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="./receptionist.php">Receptionist</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar ends  -->


    <!-- sidebar starts  -->
    <div class="s-layout">
    <!-- Sidebar -->
      <div class="s-layout__sidebar">
        <a class="s-sidebar__trigger" href="#0">
          <i class="fa fa-bars"></i>
        </a>

        <nav class="s-sidebar__nav">
          <ul>
            <li>
              <a class="s-sidebar__nav-link" href="./getbilling.php">
                <i class="fas fa-wallet"></i><em>Billing Record</em>
              </a>
            </li>
            <li>
              <a class="s-sidebar__nav-link" href="./getcoach.php">
              <i class="fa fa-duotone fa-dumbbell"></i><em>Coach Record</em>
              </a>
            </li>
            <li>
              <a class="s-sidebar__nav-link s-active" href="./getmember.php">
              <i class="fas fa-users"></i><em>Members Record</em>
              </a>
            </li>
            <li>
              <a class="s-sidebar__nav-link" href="./getreceptionist.php">
              <i class="fas fa-door-open"></i><em>Reception Record</em>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    <!-- Content -->
      <main class="s-layout__content">
        <h2>Members Details</h2>
        <!-- Table starts -->
        <div class="table-wrapper">
          
            <table class="fl-table">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Member Name</th>
                    <th>Date</th>
                    <th>D.O.B.</th>
                    <th>Phone No.</th>
                    <th>Coach Name</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
            <?php   
            while($rows=$query1->fetch_assoc()){
            ?>   
                <tr>
                  <td><?php echo $rows['id'];?></td>
                  <td><?php echo $rows['name'];?></td>
                  <td><?php echo $rows['date'];?></td>
                  <td><?php echo $rows['dob'];?></td>
                  <td><?php echo $rows['phone'];?></td>
                  <td><?php echo $rows['coach'];?></td>
                  <td> 
                    <a href="delete.php?table=member&delete=<?php echo $rows['no'];?>" ><button><i class="fas fa-trash"></i></button></>
                  </td>
                </tr>        
            <?php
            }
            ?>
            </tbody>
            </table>
        </div>
        <!-- Table ends  -->
      </main>
    </div>
    <!-- sidebar ends  -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
