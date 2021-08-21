<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>BASIC BANKING SYSYTEM</title>
  </head>

  <body style="background: #3C1053FF;">
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background: #FFB6C1;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                  <h3 style="color: #3C1053FF;">WELCOME TO</h3>
                  <h1 style="color: #3C1053FF;">JIO PAYMENT BANK</h1>
                  <p style="font-style: italic; font-family: serif; font-weight: bold;">Taking Banking Technology to the next level</p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" class="img-fluid pt-2" style="width:400px; height:300px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid" style="width:250px; height:250px;">
                    <br>
                    <a href="createuser.php"><button style="color: #3C1053FF; background: #FFB6C1; font-size: 20px; font-weight: bold;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid" style="width:250px; height:250px;">
                    <br>
                    <a href="transfermoney.php"><button style="color: #3C1053FF; background: #FFB6C1; font-size: 20px; font-weight: bold;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" style="width:250px; height:250px;">
                    <br>
                    <a href="transactionhistory.php"><button style="color: #3C1053FF; background: #FFB6C1; font-size: 20px; font-weight: bold;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background: #3C1053FF; color: #FFB6C1;">
        <p>&copy 2021. Made by <b>MOLLA BADRUL HASAN</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
