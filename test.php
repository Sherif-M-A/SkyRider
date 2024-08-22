<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
        <link rel="stylesheet" href="https://classless.de/classless.css">
    </head>
    <body>
        <fieldset>
            <legend>Result</legend>
            <?php
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            echo "<h3>Welcome $fname $lname</h3><br>";
            echo $_POST["frt"];
            ?>
        </fieldset>
    </body>
</html>
