<?php
    $name = "";
    $email = "";
    $years = "";
    $programinglanguage = ['java','sql','python','javascript' ] ;

 if($_GET) {
    if(isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
      
        $errors[] = "NAME IS REQUIRED";
    }

      if(isset($_GET['email'])) {
        $email = $_GET['email'];
    } else {
        $errors[] = "EMAIL IS REQUIRED";
    }

    if(isset($_GET['years'])) {
        if(!is_numeric($_GET['years']) || $_GET['years'] < 0 || $_GET['years'] > 50) {
            $errors[] = "YEARS MUST BE A VALID NUMBER BETWEEN 0 AND 50";
        } else {
            $age = $_GET['years'];
        }
    } else {
        $errors[] = "YEARS IS REQUIRED";
    }

     $selectedLang = [0];
    if(!empty($_GET['programinglan'])) {
        $selectedLang = $_GET['programinglan'];
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
    <title>PHP Homework-59</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
  <div class="container" > 
        <div class="jumbotron">
        <h1>PHP Homework-59</h1>
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
    <label for="years" class="col-sm-3 control-label">How many years are you coding?</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" id="years" name="years" placeholder="Years Coding" min="0" max="50"  required>
    </div>

    <label for="programinglanguage" class="col-sm-3 control-label">What is your favorite programing language?</label>
    <div class="col-sm-3">
      
                    <select class="form-control" name="programinglan[]" multiple>
                        <?php foreach($programinglanguage as $key => $language) : ?>
                      
                        <option value="<?= $key ?>"
                        <!-- ?php if (in_array($key, $selectedStocks)) echo "selected" //== to allow conversion ?  -->
                        <?= $programinglanguage[$key] ?>
                    </option>
                        <?php endforeach ?>
                    </select>
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

      <?php if ($_GET) : ?>
     
        <h3> Welcome <?=$name?> , Thank you for taking our survay. </h3>
        <h2> You have been coding in <?= $selectedLang ?>  for <?=$years?> Years. </h2>

     <?php endif ?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 
 </div>
  </body>
</html>