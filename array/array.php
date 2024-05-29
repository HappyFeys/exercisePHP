<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $familly= ["Juliette", "Emmanuelle", "Myriam", "Eric", "Agnès", "Rin", "Sam"];
        print_r($familly);
        $recipe= ["Lasagne", "Barbecue", "Pate bolo"];
        print_r($recipe);
        $film=["Fast&Furious Tokyo Drift", "The mandalorian", "Titanic", "Blanche-Neige et les 7 mains"];
        print_r($film[1]);

        var_dump($familly);

        array_push($recipe, "Frites");
        print_r($recipe);

        $me = array(
            'age' => 30,
            'firstName' => "Dylan",
            'lastName' => "Feys",
            'season' => "spring",
            'likeSoccer' => false,
            'hobbie' => ["video game", "bike", "motocross", "run", "code"],
            'mother' => $mother
        );
        $mother = array(
            'age' => 54,
            'firstName' => "Myriam",
            'lastName' => "Francois",
            'season' => "summer",
            'likeSoccer' => false,
            'hobbie' => ["jardinnage", "bronzer", "lecture"]
        );

        print_r($me);
        $numMother= count($mother['hobbie']);
        $numMe = count($me['hobbie']);

        echo $numMe+$numMother;

        $me['hobbie'][]="taxidermie";
        print_r($me['hobbie']);

        $me['lastName'] = "Durand";
        print_r($me['lastName']);

    ?>

</body>
</html>