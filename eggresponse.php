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

            $egg_fname = htmlspecialchars($_POST['fname']);
            $egg_lname = htmlspecialchars($_POST['lname']);
            $egg_eat = (int)$_POST['eggs'];
            $egg_fav = htmlspecialchars($_POST['favegg']);
            $egg_time = htmlspecialchars($_POST['breakfast']).htmlspecialchars($_POST['dinner']).htmlspecialchars($_POST['supper']);

        ?> 
    </head>
    <body>
    <?php
        $sql = "INSERT INTO egg_list (egg_name, egg_eat, egg_fav, egg_time) VALUES ('$egg_fname',$egg_eat,'$egg_fav','$egg_time');";
        $result = mysqli_query($conn, $sql);
        $sqli = "select * from egg_list where egg_name='$egg_fname';";
        $resulti = mysqli_query($conn, $sqli); 

        echo "Hello, this is a review of your information!:\n"."<br>";
        
        foreach ($resulti as $row) { 
        echo "Your name is {$row['egg_name']}."."<br>".
        "You eat {$row['egg_eat']} a day."."<br>".
        "Your favorite type of egg is {$row['egg_fav']}"."<br>".
        "You eat egg during the {$row['egg_time']}"; 
        }


        //close connection
        mysqli_close($conn);
    ?>
    </body>
</html>