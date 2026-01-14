<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method = "GET"> 
            <label> enter your source</label>
            <input type = "number" max= "100" min ="0" name = "score" required/>
            <input type = "submit" />
        </form>

        <?php
            if (isset($_GET["score"]))
            {
                $score = $_GET ["score"];
                $Grade = ' ';
                if ($score <60)
                    $Grade = 'F';
                else if ($score < 70)
                    $Grade = 'D';
                else if ($score < 80)
                    $Grade = 'C';
                else if ($score < 90)
                    $Grade = 'B';
                else 
                    $Grade = 'A';
                echo "<p>  Score: $score </p>";
                echo "<p> Grade: $Grade</p>";
            }
        ?>
    </body>
</html>















