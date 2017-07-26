<?php

 $cs = "mysql:host=localhost;dbname=jewishjudaica";
 $user = "test2";
 $password = 'pass';


 try{
      
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

   if(isset($_GET["item"]) && isset($_GET["price"]) ){
        
        $name = $_GET['item'];
        $price = $_GET['price'];

    $stmt = $db->prepare("INSERT INTO seforim (name, price) 
    VALUES (:name, :price)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);

    $stmt->execute();


        
   }





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

    <div class="container ">

       <div class="alert alert-success"><?php echo "Your item " . $name .", $" .$price ." has been submitted"  ?></div>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>