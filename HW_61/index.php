<?php

require 'somephp.php';

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

<form action="HW_61_2.php" method="get">
        <div class="form-group">
            <label for="month" >Chose a Month:</label>
            <select class="form-control" id="month"name="month" >
            
            <?php foreach($months as $month=>$dayInMonth){ ?>
            <option value="<?php echo $month; ?>"><?php echo  $month; ?></option>
            <?php } ?>
            
        </select>

        </div>

        <div class="form-group">
            <label for="month">Chose a Year:</label>
            <select class="form-control" id="year" name="year">
        <option value="">Year</option>
        <?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php } ?>
            
            
            
            
        </select>
        </div>

        
        <button type="submit" class="btn btn-default">Submit</button>
</form>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>