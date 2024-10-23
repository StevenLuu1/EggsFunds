<!DOCTYPE html>
<html>
    <head>
        <title>Question</title>
        <script>
            function myFunction(elem) {
                elem.innerHTML="Hello world";
            }

            function Blur() {
                let x=document.getElementById("fname")
                if (x.value.length == 0) {
                    alert("Do not forget to put name");
                }
                
            }
        </script>
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
        ?>
    </head>
    <body>
        <div>
            <a href="index.html">Go back</a>
        </div>
        <div>
            <h1>Questions about egg</h1>
            <img src="images/sleepygud.jpg" alt="sleepygud" width="300">
        </div>
        <div><br>
            <button type="button" onclick="myFunction(this);">Are you ready?</button>
            <form action="eggresponse.php"  method="POST">
                <h3>What is your name?</h3>
                <fieldset>
                    <legend>User Information:</legend>
                    <label for="fname" >Enter your first name: </label><br>
                    <input type="text" id="fname" name="fname" required pattern=".{}[A-z]" onblur="Blur()"><br><br>
                    <label for="lname">Enter your last name: </label><br>
                    <input type="text" name="lname" required pattern=".{}[A-z]"><br><br>
                </fieldset>

                <h3>What do you like about eggs?</h3>
                <textarea name="message" rows="5" cols="30"></textarea>

                <h3>How many eggs do you eat a day?</h3>
                <label for="eggs">Choose quantity:</label>
                <select name="eggs" id="eegs">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                </select>

                <h3>Between these eggs, which one do you prefer?</h3>
                    <input type="radio" id="boiled" name="favegg" value="boiled">
                    <label for="boiled">Boiled</label><br>
                    <input type="radio" name="favegg" id="sunny-side-up" value="sunny-side-up">
                    <label for="sunny-side-up">Sunny-side-up</label><br>
                    <input type="radio" id="over-egg" name="favegg" value="over-egg">
                    <label for="over-egg">Over-egg</label><br>
                    <input type="radio" id="scrambled" name="favegg" value="scrambled">
                    <label for="scrambled">Scrambled</label><br>
                    <input type="radio" id="omelette" name="favegg" value="omelette">
                    <label for="omelette">Omelette</label><br>
                    <input type="radio" id="poached" name="favegg" value="poached">
                    <label for="poached">Poached</label><br>

                <h3>When do you eat you eggs?</h3>
                    <input type="checkbox" id="breakfast" name="breakfast" value="breakfast">
                    <label for="breakfast">Morning</label><br>
                    <input type="checkbox" id="dinner" name="dinner" value="dinner">
                    <label for="morning">Dinner</label><br>
                    <input type="checkbox" id="supper" name="supper" value="supper">
                    <label for="morning">Supper</label><br>

    
                <input type="submit" value="Done">
            </form>
        </div>
    </body>
</html>