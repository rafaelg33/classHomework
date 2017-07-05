
<?php

$color = "black";
if(!empty($_GET["color"])) {
    $color = $_GET["color"];
}
$font = "serif";
if(!empty($_GET["font"])) {
    $font = $_GET["font"];
}


?>

<style>
*{
    color: <?= $color; ?> ;
    font-family: <?= $font; ?> ;
}

</style>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PHP Include Tutorial</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="bacon.php">BACOM IPSUM</a></li>
      <li><a href="heisenberg.php">HEISENBERG IPSUM</a></li>
    </ul>
  </div>
</nav>