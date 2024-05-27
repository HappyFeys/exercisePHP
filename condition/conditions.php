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




</body>
</html>