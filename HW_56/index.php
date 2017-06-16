<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="HW54.css">


    <title>Home Work 56</title>

</head>
<body>

<?php
$name1 = "Donald Trump"; $trump ="2017";
$name2 = "Barack Obama"; $barack ="2009-2017";
$name3 = "George W. Bush"; $bush ="2001-2009";


?>


        <table class="table table-bordered table-condensed table-striped  table-hover">

            <thead>

                <tr>
                    <th>american presidents</th>
                    <th>Year Elected</th>
                   
                    

                </tr>

            </thead>

            <tbody>

                <tr>
                    
                    <td><?=$name1?></td>
                    <td><?=$trump?></td>
                    
                </tr>

              <tr>
                    
                    <td><?=$name2?></td>
                    <td><?=$barack?></td>
                   
                </tr>  

                 <tr>
                    
                    <td><?=$name3?></td>
                    <td><?=$bush?></td>
                   
                </tr> 

               

            </tbody>

           

        </table>

        </div>

    </div>

   
   


     



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>