<?php

 $cs = "mysql:host=localhost;dbname=jewishjudaica";
 $user = "test2";
 $password = 'pass';


 try{
      
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

   
        
        $query = "SELECT id,name,price FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
        print_r($seforim);   
  





 }catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }

?>