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
                <h2>Month result</h2>    
         </div>

            <?php
                 $name = isset($_POST['Month'])?$_POST['Month']:null;
                 echo $name;
            ?>
        
    </form>
    
    </body>
</html>

