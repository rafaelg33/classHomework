<?php

require "removeControler.php";
require "removeModel.php";

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php require 'navbar.php';?>
    <div class="container">
            <h1>Seforim</h1>

    <table class="table">
        <tr>
                <th>Sefer</th>
                
                <th> Remove Sefer</th>
        </tr>

  
   
     <?php foreach($seforim as $sefer1=>$prices) : ?>
            <tr>
                 <?php foreach($prices as $sefer2=>$price) : ?>
                 <td><?= $price ?></td>
                 <td><form><input type="hidden" name="delete" value="<?= $sefer1 ?>" >  <input type="submit" value="remove" > </form></td>
                <?php endforeach ?>
            </tr>
            
      <?php endforeach ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>