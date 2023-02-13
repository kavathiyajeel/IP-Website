<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
         <div class="container">
            <form action="index.php">
                <div class="mt-5">
                <h2>Interest result</h2>    
         </div>

         <?php

            $principle = isset($_GET['principle'])?((int)$_GET['principle']):0;
            $rate = isset($_GET['rate'])?((int)$_GET['rate']):0;
            $year = isset($_GET['year'])?((int)$_GET['year']):0;

            if($principle != 0 && $rate != 0 && $year != 0)
            {
                $si = ($principle * $rate * $year) / 100;
            
                echo "Amount = ".$si;
            }
            else{
                echo "Invalid Input";
            }

        ?>
        
    </form>
    
    </body>
</html>

