<!DOCTYPE html>
<html>
    <head>
        <?php                
            $server = "localhost";
            $username = "pblu";
            $password = "pblufows;"
            $database = "dbegg";
            $conn = mysqli_connect($server, $username, $password, $database);
            // Check connection
            if (!$conn) {
                   die ("Connection failed: {mysqli_connector_error()}");
            }
            $sql = "select * from egg_list;";
            $result = mysqli_query ($conn, $sql);

            $egg_name = htmlspecialchars($_POST['fname']);
            $egg_eat = (int)$_POST['eggs'];
            $egg_fav = htmlspecialchars($_POST['favegg']);
            $egg_time = htmlspecialchars($_POST['breakfast']);
        ?> 
    </head>
    <body>
    <?php
        $sql = "INSERT INTO users (egg_name, egg_eat, egg_fav, egg_time) VALUES ('$egg_name',$egg_eat,'$egg_fav','$egg_time');";
        $result = mysqli_query($conn, $sql);
            
        //close connection
        mysqli_close($conn);
    ?>
    </body>
</html>