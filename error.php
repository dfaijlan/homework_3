<html>
    <head>
        <title>Legend of Zelda Quiz</title>
    </head>
    <body>
        <?php
            if ($_GET["name"] != "" && $_GET["own"] != "" && !isset($_GET["q1"]) 
                && !isset($_GET["q2"]) && !isset($_GET["q3"]))
                $action = "result.php";
            else
                $action = "error.php";
        ?>
        
        Some forms are empty, please fill them and try again.<br><br>
        
        <form action="<?php echo $action; ?>">
            Name: <input type="text" name="name" value=""><br><br>
            Own the Game? 
            <select name="own">
                <option value="">Select One</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br><br>
            Did you enjoy the game? (if applicable)
            <select name="rating">
                <option value="">Select One</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br><br>
            Question 1: What is Zelda's race?<br>
            <input type="radio" name="q1" value="goron">Goron<br>
            <input type="radio" name="q1" value="zora">Zora<br>
            <input type="radio" name="q1" value="hylian">Hylian<br>
            <input type="radio" name="q1" value="rito">Rito<br><br>
            Question 2: How long was Link asleep?<br>
            <input type="radio" name="q2" value="1">1 Year<br>
            <input type="radio" name="q2" value="100">100 Years<br>
            <input type="radio" name="q2" value="25">25 Years<br>
            <input type="radio" name="q2" value="143">143 Years<br><br>
            Question 3: What is the name of setting for The Legend of Zelda?<br>
            <input type="radio" name="q3" value="hyrule">Hyrule<br>
            <input type="radio" name="q3" value="kanto">Kanto<br>
            <input type="radio" name="q3" value="mushroom">Mushroom Kingdom<br>
            <input type="radio" name="q3" value="final">Final Destination<br><br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>