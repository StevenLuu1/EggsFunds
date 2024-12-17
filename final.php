<?php
    $server = "localhost";
    $username = "pblu";
    $password = "pblufows";
    $database = "final";
    $conn = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (!$conn) {
           die ("Connection failed: {mysqli_connector_error()}");
    }
    $sql = "select * from angel;";
    $result = mysqli_query ($conn, $sql);


    //search var for redirect
    $search = htmlspecialchars($_POST['search']);
    //ip address retrieved
    $ip_add = "$_SERVER['REMOTE_ADDR']";

    //put info into database
    $sqli = "INSERT INTO angel (ip_add, select_t) VALUES ('$ip_add','$search');";
    $result = mysqli_query($conn, $sqli);


    //redirect
    header("Location: https://google.com/search?q=$search");
?>
