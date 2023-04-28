<!DOCTYPE html>
<html>
    <body>

        <form action="index.php" method = "post">

        <?php 

            require('database.php');

            $movie_title = $_POST['title'];
            $release_date = $_POST['Release_Date'];
            $genre = $_POST['genre'];


            if(isset($_POST['title']))
            {
                $movie_title = $_POST['title'];
            }
            if(isset($_POST['Release_Date']))
            {
                $release_date = $_POST['Release_Date'];
            }
            if(isset($_POST['genre']))
            {
                $genre = $_POST['genre'];
            }

            global $db;

            $query = "INSERT INTO `movie`(`MovieTitle`, `ReleaseDate`, `Genre`) VALUES (:movie_title, :release_date, :genre)";

            $statement = $db->prepare($query);
            $result = $statement->execute(array(":movie_title"=>$movie_title,
            ":release_date"=>$release_date, ":genre"=>$genre));

            $newMovie = $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->closeCursor();

            header('Location: index.php');
        ?>

        </form>

    </body>
</html>