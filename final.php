<p><?= $_SERVER['REMOTE_ADDR'] ?></p>
<?php
    $search = htmlspecialchars($_POST['search']);

    header("Location: https://google.com/search?q='$search'");
?>
