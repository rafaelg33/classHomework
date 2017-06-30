<?php
    $name = "";
    $email = "";
    $age = "";
    $rate = "";
    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        $errors[] = "NAME IS REQUIRED";
    }
    
    if(!empty($_GET['email'])) {
        $email = $_GET['email'];
    } else {
        $errors[] = "EMAIL IS REQUIRED";
    }
    if(isset($_GET['age'])) {
        if(!is_numeric($_GET['age']) || $_GET['age'] < 0 || $_GET['age'] > 120) {
            $errors[] = "AGE MUST BE A VALID NUMBER BETWEEN 0 AND 120";
        } else {
            $age = $_GET['age'];
        }
    } else {
        $errors[] = "AGE IS REQUIRED";
    }
    if(isset($_GET['rate'])) {
        if(!is_numeric($_GET['rate']) || $_GET['rate'] < 1 || $_GET['rate'] > 10) {
            $errors[] = "rate MUST BE A VALID NUMBER BETWEEN 1 AND 10";
        } else {
            $rate = $_GET['rate'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Homework-58</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
  <div class="container" > 
        <div class="jumbotron">
        <h1>PHP Homework-58</h1>
        <h3>Form Validation </h3>
        </div>


<form  class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
<div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="age" name="age" placeholder="Age" min="0" max="120"  required>
    </div>

    <label for="rate" class="col-sm-2 control-label">Rate</label>
    <div class="col-sm-4">
      <input type="range" class="form-control" id="rate" name="rate"  placeholder="Rate" min="1" max="10">
    </div>


  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


 <div class="container">
        <?php if(!empty($errors)) :?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach($errors as $error) echo "<li>$error</li>" ?>
                </ul>
            </div>
        <?php endif ?>

      <?php if (!empty($name) || !empty($email) || !empty($age) || !empty($rate) ) : ?>
     
        <h3> Welcome <?=$name?> , Thank you for submitting your rate of  <?=$rate?> </h3>


     <?php endif ?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script
 </div>
  </body>
</html>