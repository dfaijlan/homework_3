<html>
    <head>
        <title>Legend of Zelda Quiz</title>
         <style>
            @import url("css/styles.css");
            @import url('https://fonts.googleapis.com/css?family=Fascinate+Inline|Ubuntu');
        </style>
    </head>
    <body>
         <h1>The Legend of Zelda: Breath of the Wild<br>
            Quiz!</h1>
            
        <?php
            echo "<div id='thankyou'>Thank you <u>" . $_POST["name"] . "</u> for participating in this questionnaire";
            
            if ($_POST["own"] == "yes")
            {
                echo ", as well as for purchasing Breath of the Wild!";
                
                if ($_POST["rating"] == "yes")
                    echo "<br> We're glad you enjoyed your time in the land of Hyrule!";
                else
                    echo "<br> We're sorry that you did not enjoy your stay in the land of Hyrule.</div>";
            }
            else 
                echo "!";
                
            $num_correct = 0;
            
            if ($_POST["q1"] == "hylian")
                $num_correct++;
            if ($_POST["q2"] == "100")
                $num_correct++;
            if ($_POST["q3"] == "Hyrule")
                $num_correct++;
            
            echo "<br><br> <div id='return'>Your score: " . $num_correct . "/3<br><br>";
        ?>
            <form action="index.php">
                <input type="submit" value="Return">
            </form>
        </div>
    </body>
</html>