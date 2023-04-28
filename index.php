<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
        <title>index</title>

        <style type="text/css">
        
           
            a
            {
                font-size: 25px;
            }
            p
            {
                font-size: 25px;
            }
       
    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

<body>
<div class="container">

    <?php 
        include('header.php');
        require('database.php');

        // get movie id
        $movie_id = filter_input(INPUT_GET, 'MovieID', FILTER_VALIDATE_INT);
        if($movie_id == NULL || $movie_id == false)
        {
            $movie_id = 1;
        }

        $queryResults = 'SELECT * FROM movie';
        $statement1 = $db->prepare($queryResults);
        // $statement1 ->bindValue(':movie_id',$movie_id);
        $statement1->execute();
        $movies = $statement1->fetchall();
        $statement1->closeCursor();
    ?>

<a href = "addmovie.php" class = "text-primary"><strong>Add A New Movie</strong></a>
<p align = "left"><strong>All Movies</strong></p>
<table class="table table-striped">
  
        <tr>
            <th>Title</th>
            <th>Release Date</th>
            <th>Genre</th>
            <th>Update</th>
            <th>Remove</th>
        </tr>
 
        <?php foreach($movies as $row){ ?>
            <tr>
                <td><?php echo $row['MovieTitle']; ?></td>
                <td><?php echo $row['ReleaseDate']; ?></td>
                <td><?php echo $row['Genre']; ?></td>
                <td>
                   <button><a href="updateMovie.php?MovieID=<?= $row['MovieID']; ?>">Edit</a></button>
                </td>
                <!-- <td><button type = "submit" onclick="document.location.href = 'deletemovie.php' ">Delete</button></td> -->
                <td>
                <button><a href="deleteMovie.php?MovieID=<?= $row['MovieID']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php } ?>
   
</table>
</div>

<?php
    include('footer.php');
?>
</body>
</html>
