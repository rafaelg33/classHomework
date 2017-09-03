<!DOCTYPE html>
<?php

include 'cart.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

    <style>
       
    
    
    </style>
 
  </head>
  <body>
    <h1 class="text-center">PHP Store <a href="viewcart.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
Go to cart</a></h1>

  <div class="container">
      <div class="row">


    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="apple-3.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Gala Apple</h4>
          <p class="card-text">$.99 Each</p>
          <form  method="post">
            <div class="input-group">
                <input type="hidden"  name="name" value="apple">
                <input type="text" class="form-control" placeholder="Enter amount" name="amount">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">Add to cart</button>
                </span>
            </div>
         </form>
    </div>
          
   </div>


   <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="orange.jpg" alt="Card image cap">
          <div class="card-body">
                <h4 class="card-title">Orange</h4>
                <p class="card-text">$1.25 Each</p>
                <form  method="post">
            <div class="input-group">
                 <input type="hidden"  name="name" value="orange">
                <input type="text" class="form-control" placeholder="Enter amount" name="amount">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">Add to cart</button>
                </span>
            </div>
         </form>   
       </div>
   </div>

   <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="pear2.jpg" alt="Card image cap">
          <div class="card-body">
                <h4 class="card-title">Pear</h4>
                <p class="card-text">$.69 Each</p>
                <form action="cart.php" method="post">
            <div class="input-group">
                 <input type="hidden"  name="name" value="pear">
                <input type="text" class="form-control" placeholder="Enter amount" name="amount">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">Add to cart</button>
                </span>
            </div>
         </form> 
        </div>    
   </div>
    
      </div>   <!-- row -->
    </div> <!-- Container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>