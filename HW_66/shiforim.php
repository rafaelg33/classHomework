<?php

 $cs = "mysql:host=localhost;dbname=jewishjudaica";
 $user = "test2";
 $password = 'pass';

 if(! empty($_GET["search"])) {
    $category = $_GET["search"];
}


 try{
      
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

   
    if(!empty($category)){
        
       $query = "SELECT name,price FROM seforim WHERE category = :category ";

       $results = $db->prepare($query);
       $results->bindValue('category', $category);
       $results->execute();
       $seforim = $results->fetchAll();
       print_r($seforim);   
  

    }else{
       
       $query = "SELECT name,price FROM seforim ";

       $results = $db->query($query);
       $seforim = $results->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
       print_r($seforim);   
  

    }


     $query = "SELECT category FROM seforim GROUP BY category ";

       $results = $db->query($query);
       $search = $results->fetchAll();
       print_r($search);  




 }catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
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
    <?php require 'navbar.php';?>


<div class="container">

<div class="row">

<div class="col-sm-3">
<h3>Narrow your search</h3>
<form>
        <div class="form-group">


  <select class="form-control" name="search">
       <?php foreach($search as $mysearch) : ?>
        
        <option value="<?= $mysearch['category'] ?>"<?php if($mysearch['category'] == $category ) { echo"selected"; }?> ><?= $mysearch['category'] ?>
    
        </option>

   
     

    <?php endforeach ?>
  </select>
  <input type="submit"  value="submit"> 

</div>




</form>



</div>




<div class="col-sm-9">

                <h1>Seforim</h1>

                <table class="table">
                <tr>
                        <th>Sefer</th>
                        <th> Price</th>
                </tr>

                
                
                    <?php foreach($seforim as $sefer=>$price) : ?>
                            <tr>
                                <td><?= $sefer ?></td>
                                <?php foreach($price as $sefer=>$price) : ?>
                                <td><?= $price ?></td>
                                <?php endforeach ?>
                            </tr>
                            
                    <?php endforeach ?>







                

                </table>
                </div>
  </div>

</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>