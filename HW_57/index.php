<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="HW54.css">


    <title>Home Work 57</title>

</head>
<body>
    <div class=container>

<?php

$presidents = array(
   array( "Donald Trump", 2017 ),
   array( "Barack Obama","2009-2017" ),
   array( "George W. Bush", " 2001-2009"),

);

$presidents2 = [
        [
            "name" => "Donald Trump",
            "year" => 2017
        ],
        [
            "name" => "Barack Obama",
            "year" =>"2009-2017"
        ],
        [
            "name" => "George W. Bush",
            "year" => "2001-2009"
        ]
    ];



?>
          <h1>   Table With NON Associative Array</h1>

        <table class="table table-bordered table-condensed table-striped  table-hover">

            <thead>

                <tr>
                    <th>american presidents</th>
                    <th>Year Elected</th>
                   
                    

                </tr>

            </thead>

            <tbody>

                <tr>
                    
                    <td><?=$presidents[0][0]?></td>
                    <td><?=$presidents[0][1]?></td>
                    
                </tr>

              <tr>
                    
                    <td><?=$presidents[1][0]?></td>
                    <td><?=$presidents[1][1]?></td>
                   
                </tr>  

                 <tr>
                    
                    <td><?=$presidents[2][0]?></td>
                    <td><?=$presidents[2][1]?></td>
                   
                </tr> 

               

            </tbody>

           

        </table>

        <h1>   Table With Associative Array</h1>



        <table class="table table-bordered table-condensed table-striped  table-hover">

            <thead>

                <tr>
                    <th>american presidents</th>
                    <th>Year Elected</th>
                   
                    

                </tr>

            </thead>

            <tbody>

                <tr>
                    
                    <td><?=$presidents2[0]['name']?></td>
                    <td><?=$presidents2[0]['year']?></td>
                    
                </tr>

              <tr>
                    
                    <td><?=$presidents2[1]['name']?></td>
                    <td><?=$presidents2[1]['year']?></td>
                   
                </tr>  

                 <tr>
                    
                    <td><?=$presidents2[2]['name']?></td>
                    <td><?=$presidents2[2]['year']?></td>
                   
                </tr> 

               

            <table class="table table-bordered table-condensed table-striped  table-hover">

            <tbody>

           

        </table>

         <h1>   Table Generated From PHP</h1>

        <table class="table table-bordered table-condensed table-striped  table-hover">


            <tbody>

      

<?php

       

         foreach($presidents2 as $presidents2) {
             echo "<tr>";
                    foreach($presidents2 as $value)
                        echo "<td>" . $value . "</td>" . "<br/>";
                }
                echo "</tr>";
?>
       
       </tbody>

    </table>

        </div>

    </div>

   
   
   


     

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>