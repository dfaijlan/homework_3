<html>
    <head>
        <title>Legend of Zelda Quiz</title>
        <style>
            @import url("css/styles.css");
            @import url('https://fonts.googleapis.com/css?family=Fascinate+Inline|Ubuntu');
        </style>
    </head>
    <body>
        <?php
            if (isset($_GET["name"]))
                $action = "result.php";
            else
                $action = "result.php";
        ?>
        
        <h1>The Legend of Zelda: Breath of the Wild<br>
            Quiz!</h1>
            
        <form method="post" action="<?php echo $action; ?>">
            Name: <input type="text" name="name" value="" required><br><br>
            Own the Game? 
            <select name="own" required>
                <option value="">Select One</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br><br>
            Did you enjoy the game? (if applicable)
            <select name="rating" required>
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