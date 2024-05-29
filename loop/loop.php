<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        foreach($pronouns as $pronoun){
            echo "<pre>";
            echo ($pronoun=="He/She")? "$pronoun codes" : "$pronoun code";
            echo "</pre>";
        };

        $number=0;
        while ($number <= 120) {
            echo " $number -";
            $number++;
        };

        
        for ($i=0; $i <= 120 ; $i++) { 
            echo "$i - ";
        };

        $team = ['Dylan', 'Adrien', 'Tom', 'Manu', 'Iliess', 'Giovanni', 'Nath', 'Zahra'];
        for ($i=0; $i < count($team) ; $i++) { 
            echo $team[$i];
        };

        $pays = array(
            'FR' => 'France',
            'DE' => 'Allemagne',
            'IT' => 'Italie',
            'ES' => 'Espagne',
            'PT' => 'Portugal',
            'BE' => 'Belgique',
            'NL' => 'Pays-Bas',
            'CH' => 'Suisse',
            'AT' => 'Autriche',
            'GR' => 'Grèce'
        );

        echo "<select>";
        foreach ($pays as $key => $value) {
            echo "<option>$key</option>";
        };
        echo "</select>";


    ?>
</body>
</html>