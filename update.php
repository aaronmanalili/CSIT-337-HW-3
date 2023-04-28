<!DOCTYPE html>
<html>
    <body>

        <form action="index.php" method = "post">

        <?php 

            //require('database.php');
            
            
            //global $db;
            $db = new PDO('mysql:host=localhost; dbname=msu_movies', "mgs_user", "pa55word");

            $movie_title = $_POST['MovieTitle'];
            $release_date = $_POST['Release_Date'];
            $genre = $_POST['genre'];
            $movie_id = $_POST['MovieID'];

            $statement=$db->prepare("UPDATE movie SET MovieTitle = :movie_title, ReleaseDate = :release_date, Genre = :genre WHERE MovieID = :movie_id");
            $statement->bindParam(':movie_title', $movie_title);
            $statement->bindParam(':release_date', $release_date);
            $statement->bindParam(':genre', $genre);
            $statement->bindParam(':movie_id', $movie_id);
            $statement->execute(
                [ 
                         ':movie_id' => $movie_id,
                         ':movie_title' => $movie_title,
                         ':release_date' => $release_date,
                         ':genre' => $genre
                         
                ]);
           
            $info = $statement->fetch(PDO::FETCH_ASSOC);
            // if(isset($_POST['submit']))
            // {
            //    // $db = new PDO('mysql:host=localhost; dbname=msu_movies', "mgs_user", "pa55word");
               
            //     $movie_title = $_POST['MovieTitle'];
            //     $release_date = $_POST['ReleaseDate'];
            //     $genre = $_POST['Genre'];

            //     $query = "UPDATE movie SET MovieTitle= $movie_title, ReleaseDate = $release_date, Genre = $genre WHERE MovieID = :movie_id";
            //     $statement = $db->prepare($query);
            //     //$statement->bindValue(':movie_ID', $movie_id);
            //     $statement->execute([ 
            //         ':movie_id' => $movie_id]
            //     );

            //     $info = $statement->fetch(PDO::FETCH_ASSOC);
            // }



             header('Location: index.php');
        ?>

        </form>

    </body>
</html>