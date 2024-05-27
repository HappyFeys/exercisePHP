<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    0 => 'health hazard',
    1 => 'filthy',
    2 => 'dirty',
    3 => 'clean',
    4 => 'immaculate'
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if( $room_filthiness==$possible_states[0] or $room_filthiness==$possible_states[1] or $room_filthiness==$possible_states[2] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

date_default_timezone_set('Europe/Berlin');
$now = date('H:i', time());

if( $now>'05:00' and $now<'09:00' ){
    echo "<br>Good morning !";
} else if( $now>'09:00' and $now<'12h00' ){
    echo "<br>Good day!";
} else if($now>'12:00' and $now<'16:00'){
    echo "<br>Good afternoon !";
} else if($now>'16:00' and $now<'21:00'){
    echo "<br>Good Evening !";
} else {
    echo "Good night !";
}

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['motherlang'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $motherlang = $_GET['motherlang'];
	if($age<12 and $gender=='man' and $motherlang=="yes"){
        echo "<br>Hello mister kiddo!";
    }else if ($age<12 and $gender=='woman' and $motherlang=="yes") {
        echo "<br>Hello miss kiddo!";
    }else if ($age<18 and $gender=='man' and $motherlang=="yes") {
        echo "<br>Hello mister Teenager!";
    }else if ($age<18 and $gender=='woman' and $motherlang=="yes") {
        echo "<br>Hello miss Teenager!";
    }else if ($age<115 and $gender=='man' and $motherlang=="yes") {
        echo "<br>Hello mister Adult!";
    }else if ($age<115 and $gender=='woman' and $motherlang=="yes") {
        echo "<br>Hello miss Adult!";
    }else if($age<12 and $gender=='man' and $motherlang=="no"){
        echo "<br>Aloha mister kiddo!";
    }else if ($age<12 and $gender=='woman' and $motherlang=="no") {
        echo "<br>Hello miss kiddo!";
    }else if ($age<18 and $gender=='man' and $motherlang=="no") {
        echo "<br>Aloha mister Teenager!";
    }else if ($age<18 and $gender=='woman' and $motherlang=="no") {
        echo "<br>Aloha miss Teenager!";
    }else if ($age<115 and $gender=='man' and $motherlang=="no") {
        echo "<br>Aloha mister Adult!";
    }else if ($age<115 and $gender=='woman' and $motherlang=="no") {
        echo "<br>Aloha miss Adult!";
    }else{
        echo "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }

}
?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" id="man" value="man"><label for="man">Man</label>
    <input type="radio" name="gender" id="woman" value="woman"><label for="woman">Woman</label>
    <label for="motherlang">Do you speak English ?</label>
    <input type="radio" name="motherlang" id="yes" value="yes"><label for="yes">yes</label>
    <input type="radio" name="motherlang" id="no" value="no"><label for="no">no</label>
</form>

<?php
    if (isset($_GET['agefoot']) && isset($_GET['isWoman'])) {
        $agefoot = $_GET['agefoot'];
        $isWoman = $_GET['isWoman'];
        $critere = "Sorry you don't fit the criteria";
        if ($isWoman=='true' and $agefoot>=21 and $agefoot<=40) {
            $critere = "Welcome to the team !";
        }
        echo $critere;
    }
?>
<form method="get" action="">
    <label for="agefoot">How old are you ?</label>
    <input type="text" name="agefoot">
    <label for="isWoman">Are you a woman ?</label>
    <input type="radio" name="isWoman" id="isWoman" value="true"><label for="isWoman">Yes</label>
    <input type="radio" name="isWoman" id="notWoman" value="false"><label for="notWoman">No</label>
    <input type="submit" value="Join the team">
</form>

<?php
    if(isset($_GET['note'])){
        $note = $_GET['note'];
        $grade = "Incorrect note";
        if($note>=0 && $note<=20){
            if ($note>=0 && $note<=4) {
                $grade = "This work is really bad. What a dumb kid!";
            } else if ($note<=9) {
                $grade = "This is not sufficient. More studying is required.";
            } else if ($note==10){
                $grade = "Barely enough!";
            } else if($note<=14){
                $grade = "Not bad!";
            } else if($note<=18){
                $grade = "Bravo, bravissimo!";
            } else if($note<=20){
                $grade = "Too good to be true : confront the cheater!";
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