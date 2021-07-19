<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>
<?php
  include 'navbar.php';
?>

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/bank1.jpg" class="d-block w-100">

                <div class="carousel-caption d-none d-md-block">
                    <h2>Sparks Bank</h2>
                    <p>Welcome to Spark Bank</p>
                </div>
            </div>
           

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

<br>
<br>


    <!-- Activity section -->
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Features</h2>
            </div>
        </div>
        <br>
        <div class="row activity text-center">
            <div class="col-xs-12 col-md-4">
                <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button type="button" class="btn btn-danger">Create a User</button></a>     
                  </div>         
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-danger">Make a Transaction</button></a>
                  </div>
            </div>
            
            <div class="col-xs-12 col-md-4">
                 <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-danger">Transaction History</button></a>
                  </div>
            </div>
        </div>
    </div>
</div>

<footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sarika Jamdagni</b> <br> The Sparks Foundation</p>
      </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>