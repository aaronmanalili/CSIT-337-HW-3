<!DOCTYPE html>
<html>
    <body>

        <form action="index.php" method = "post">

        <?php 

            require('database.php');

            include('header.php');
            //require('database.php');

            if(isset($_GET['MovieID']))
            {
                $db = new PDO('mysql:host=localhost; dbname=msu_movies', "mgs_user", "pa55word");
                $movie_id = $_GET['MovieID'];
                $query = "DELETE FROM movie WHERE MovieID = :movie_id ";
                $statement = $db->prepare($query);
                //$statement->bindValue(':movie_ID', $movie_id);
                $statement->execute([ 
                    ':movie_id' => $movie_id]
                );

              
                header('Location: index.php');
            }
        ?>

        </form>

    </body>
</html>