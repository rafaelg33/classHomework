<?php
    $name = "";
    $email = "";
    $age = "";
    $rate = "";
    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        //die("Name is required");
        //$name = "UNSPECIFIED";
        //$name = "NAME IS REQUIRED";
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

        <h3> Welcome <?=$name?> , Thank you for submitting your rate of  <?=$rate?> </h3>




   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </div>
  </body>
</html>