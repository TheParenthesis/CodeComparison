<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    Enter a String: <input type="text" name="text" id="text" require>
    <input type="submit" value="submit">
    </form>
    <?php
    if (isset($_POST["text"])){
        echo $_POST["text"];
    }
    ?>
</body>
</html>
