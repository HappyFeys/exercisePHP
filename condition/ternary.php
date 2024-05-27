<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
        $greetings = "Welcome back ";
        $isMan = ($gender=="M") ? "Mister" : "Miss";
        echo $greetings . $isMan;
    }
    ?>
    <form action="" method="get">
        <input type="radio" name="gender" id="M" value="M"><label for="M">Homme</label>
        <input type="radio" name="gender" id="F" value="F"><label for="F">Femme</label>
        <input type="submit" value="Confirm">
    </form>
</body>
</html>