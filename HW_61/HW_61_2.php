<?php

require 'somephp.php';

$month = $_GET['month'];
$year = $_GET['year'];
$days = "33";

$daysInMonth = "";
$isLeapYear = "";

function is_leap_year($yea) {
	return ((($yea % 4) == 0) && ((($yea % 100) != 0) || (($yea % 400) == 0)));
}

  

          if($month != 'February' ){
          foreach($months as $moo=>$mon ) {
    
           if($month == $moo ){
                 $daysInMonth = $mon; 
           }
       
        }    
   
          }   else{
              if (is_leap_year($year)){
                  $daysInMonth =  29;
              }else{
                  $daysInMonth =  28;
              }
          }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class"container">
    <div class="row">
       <div class="well well-lg col-sm-6"><?= "Amount of days in  $month, $year, is $daysInMonth" ?></div>


       <div class="well well-lg col-sm-6">
       <?php
       if (is_leap_year($year) ){
           echo "$year is a leap year";
       }else{
           echo"$year is not an leap year";
       }
       ?>
       </div>


        
    </div>

    
 <a href="index.php"><div class="alert alert-info">Link To Enter A New Date</div>.</a>



</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>