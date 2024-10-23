<!DOCTYPE html>
<html>
    <head>
        <?php                
            $server = "localhost";
            $username = "pblu";
            $password = "pblufows";
            $database = "dbegg";
            $conn = mysqli_connect($server, $username, $password, $database);
            // Check connection
            if (!$conn) {
                   die ("Connection failed: {mysqli_connector_error()}");
            }
            $sql = "select * from egg_list;";
            $result = mysqli_query ($conn, $sql);

            $egg_fname = $_POST['fname'];
            $egg_lname = $_POST['lname'];
            $egg_eat = $_POST['eggs'];
            $egg_fav = $_POST['favegg'];
            $egg_time = $_POST['breakfast'];
        ?> 
    </head>
    <body>
    <?php
        $sql = "INSERT INTO egg_list (egg_name, egg_eat, egg_fav, egg_time) VALUES ('$egg_fname',$egg_eat,'$egg_fav','$egg_time');";
        $result = mysqli_query($conn, $sql);
            
        //close connection
        mysqli_close($conn);
    ?>
    </body>
</html>