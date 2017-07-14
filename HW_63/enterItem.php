


<!DOCTYPE html>
<html lang="en">
 <?php require 'navbar.php';?>  
<body>

<div class="container">
<form  action="addItem.php"  method="get" >
  <div class="form-group">
    <label for="item">Enter an Item to sell:</label>
    <input type="text" class="form-control" name="item" id="item">
  </div>
  <div class="form-group">
    <label for="price">Set a price:</label>
    <input type="number" class="form-control" name="price" id="price">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
    
</body>
</html>