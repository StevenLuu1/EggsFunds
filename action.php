<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            Hello <?php echo htmlspecialchars ($_POST['fname']); ?> <?php echo htmlspecialchars ($_POST['lname']); ?>
            This is what you said about egg!: <?php echo htmlspecialchars($_POST['message']); ?>
            It seems you eat <?php echo (int) $_POST ['egg']; ?> a day.
            You like     <?php echo htmlspecialchars ($_POST ['favegg']); ?> egg.
            You eat them during <?php echo ($_POST['breakfast']); ?> <?php echo ($_POST['dinner']); ?> <?php echo ($_POST['supper']); ?> 
        </div>

    </body>
</html>