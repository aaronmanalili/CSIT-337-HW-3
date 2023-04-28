<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
        <title>database</title>

        <style type="text/css">
       
    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

<body>
<div class="container">

<?php 
   
    $dsn = 'mysql:host=localhost; dbname=msu_movies';
    $username = "mgs_user";
    $password = "pa55word";
    $db = new PDO ($dsn, $username, $password);

    try
    {
        $db = new PDO ($dsn, $username, $password);
        //echo '<p>You are connected to the database!</p>';
    }
    catch(PDOException $e)
    {
        $error_message = $e->getMessage();
        echo '<p>An error occurred while connecting to the database:
            $error_message </p>';
    }

?>
</div>
</body>
</html>
