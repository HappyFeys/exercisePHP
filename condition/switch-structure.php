<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['note'])){
        $note = $_GET['note'];
        $grade = "Invalid note!";
        if($note>=0 && $note<=20){
            switch ($note) {
                case '0':
                case '1':
                case '2':
                case '3':
                case '4':
                    $grade = "This work is really bad. What a dumb kid!";
                    break;
                case '5':
                case '6':
                case '7':
                case '8':
                case '9':
                    $grade = "This is not sufficient. More studying is required.";
                    break;
                case '10':
                    $grade = "Barely enough!";
                    break;
                case '11':
                case '12':
                case '13':
                case '14':
                    $grade = "Not bad!";
                    break;
                case '15':
                case '16':
                case '17':
                case '18':
                    $grade = "Bravo, bravissimo!";
                    break;
                case '19':
                case '20':
                    $grade = "Too good to be true : confront the cheater!";
                    break;
                default:
                    $grade = "Incorrect note";
                    break;
            }
        }
        echo $grade;
    }
?>

<form action="" method="get">
    <label for="note">Enter the note</label>
    <input type="text" name="note" id="note">
    <input type="submit" value="Enter">
</form>
</body>
</html>