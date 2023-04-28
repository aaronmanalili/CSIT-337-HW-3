<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <title>Add Movie</title>

        <style type="text/css">
            input
            {
                display: inline-flex;
                
            }

            btn-primary
            {
                position: absolute;
                
            }
            label
            {
                display: inline-block;
                width: 100px;
                position: relative;
            }
           
            input
            {
                padding: 3px;
                display: block;
                position: relative;
                white-space: nowrap;
            }

            button
            {
                display: inline-block;
                width: 150px;
                align:left;
            }
            p
            {
                display: inline-block;
                font-size: 36px;
                position: relative;
                text-align: left;
            }
            btn btn-primary
            {
                display: inline-block;
                width: 100px;
                left: 0;
                top: 0;
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
        ?>
    
        <p align = "left"><strong>Add Movie</strong></p>

        <form class="form-horizontal" action="insert.php" method="POST">
           
        <div class = "form-group row">
             <label for="MovieTitle">Movie Title: </label>

                <div class="col-sm-10">
                    <input type="text" name = "title" id="MovieTitle" required>
                </div>
        </div> 

        <div class = "form-group row">
             <label for="ReleaseDate">Release Date: </label>

                <div class="col-sm-10">
                    <input type="date" name = "Release_Date" id="ReleaseDate" placeholder = "mm/dd/yyyy" required>
                </div>
        </div> 
        
        <div class = "form-group row">
            <label for="Genre">Genre: </label>

                 <div class="col-sm-10">
                    <input type="text" name = "genre" id="Genre" required>
                </div>
        </div>

            <div class="form-group row">
    
                <div class= "col-sm-10 offset-md-2">
                    <button class="btn btn-primary " type="submit">Insert Movie</button>
                </div>
            </div>

        </form>
    
       
        <a href = "index.php">View Movie List</a>
        
        <?php
            include('footer.php');
        ?>

        </div>
    </body>
</html>