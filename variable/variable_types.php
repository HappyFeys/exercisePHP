<html>
  <head><title>Hi!</title></head>
  <body>
  <?php $firstName = 'Dylan';
    $age = 30;
    $eye = 'brun';
    $familly = array(
        0 => 'Eric',
        1 => 'Myriam',
        2 => 'Emmanuelle',
        3 => 'Juliette',
        4 => 'Agnès',
        5 => 'Rin',
        6 => 'Sam'
    );
    $hungry = false;
    ?>
  	<p>Hi ! My name is <?php echo $firstName ?></p>
    <p>I am <?php echo $age ?> years old</p>
    <p>My eyes are <?php echo $eye ?></p>
    <p>The first person in my family is <?php echo $familly[0] ?> </p>
    
  </body>
</html>