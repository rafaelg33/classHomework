<?php
    $cs = "mysql:host=localhost;dbname=students";
    $user = "test2";
    $password = 'pass';
    $nameArr[] = "";
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        
        $query = "SELECT name, grade FROM grades";
        $results = $db->query($query);
        $marks = $results->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
        


        if(isset($GET["delete"])){
            $delete = $_GET["delete"];
            echo $delete;
        }
       
       if(isset($_GET["delete"])){
            $delete = $_GET["delete"];
           $query = "DELETE FROM grades WHERE name =  :name";
             
              $stmt = $db->prepare($query); 
              $stmt->bindParam('name', $delete);  
              $stmt ->execute();
          
              
        }

      
       
     
 
    
        
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
     
    }

     
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Test results</h1>

 <table class="table">
   <tr>
    <th>Name</th>
    <th> scores</th>

 
  </tr>
  <?php
      echo '<tr>';
     foreach($marks as $key => $val){
        echo '<tr>';
         
          echo "<td> $key </td>";
                foreach($val as $key1 => $val1){
                        echo "<td> $val1 </td>";
                }
             


          echo"<td><form ><input type=\"hidden\" name=\"delete\" value=\"$key\"> <input type=\"submit\" value=\"submit\" > </form></td>"  ;
      
         echo '</tr>';
     }
      echo '</tr>';
 
  ?>



   

 </table>


</div>

</body>
</html>