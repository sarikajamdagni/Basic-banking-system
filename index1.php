<!-- Add your content of head and header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Basic Banking System</title>  


<body>


 <!-- Add your content of header -->
<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-collapse">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="nav navbar-nav navbar-right">
            <li>
                    <a href="index1.php" class="btn btn-default navbar-btn" >About</a>
                    <a href="createuser.php" class="btn btn-default navbar-btn" >Create User</a>
                    <a href="transfermoney.php" class="btn btn-default navbar-btn" >Transfer Money</a>
                    <a href="transactionhistory.php" class="btn btn-default navbar-btn" >Transaction History</a>
            </li>

        </ul>

      </div>
    </div>
  </nav>
</header>



<!-- Add your site or app content here -->
<div class="background-image-container white-text-container" style="background-image: url('./img/bank1.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Sparks Bank</h1>
                <p class="">Welcome To Sparks Bank</p>
            </div>
        </div>
    </div>
</div>


  <!-- Activity section -->
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Features</h2>
            </div>
        </div>
        <div class="row activity text-center">
            <div class="col-xs-12 col-md-4">
                <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>         
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
            </div>
            
            <div class="col-xs-12 col-md-4">
                 <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
        </div>
    </div>
</div>





<script>
document.addEventListener("DOMContentLoaded", function (event) {
    
  googleMapInit(); 
  scrollToAnchor();
  scrollRevelation('reveal');
});
</script>


<footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sarika Jamdagni</b> <br> The Sparks Foundation</p>
      </footer>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
});
</script>


<script type="text/javascript" src="./main.faaf51f9.js"></script>