<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function firstCapitalize($word){
            $capi =  ucfirst($word);
            echo $capi;
        }

        firstCapitalize("dylan");
        echo "<br>";
        echo date("Y");
        echo "<br>";
        echo date("h:i:s");
        echo "<br>";

        function sum($a,$b){
            if (!is_int($a) || !is_int($b)) {
                echo "Error: argument is the not a number.";
            }else{
                return $a + $b;
            }
        };
        echo sum(7,3);
        echo "<br>";
        echo sum("a",3);
        echo "<br>";

        function acronym($string){
            $words = explode(" ", $string);
            foreach ($words as $word) {
                echo ucfirst(substr($word,0,1));
            }
            echo "<br>";
        }

        acronym("ceci est un test");

        function replaceAE($string) {
            $string = str_replace(array('ae', 'AE'), 'æ', $string);
            echo $string;
            echo "<br>";
        }

        replaceAE("catastrophe");
        replaceAE("chaenichthys");

        function replaceAEReverse($string) {
            $string = str_replace('æ', 'ae', $string);
            echo $string;
            echo "<br>";
        }

        replaceAEReverse("cæcotrophie");

        function feedback($text, $className="info"){
            if (!in_array($className, ['notice', 'error', 'warning', 'info'])){
                return "<div> Il y a une erreur avec ton msg d'erreur.";
            } else {
                return '<div class="' . $className . '"> ' . ucfirst($className) . ' : ' . $text . ' </div>';
            }
        }
        
        echo feedback("ceci est un test", "error");
        echo feedback("ceci est un msg invalide", "test");
        echo feedback("Je ne met pas de class");

        function generateRandomString($length) {
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    
        $length1 = rand(1, 5);
        $length2 = rand(7, 15);
        $word1 = generateRandomString($length1);
        $word2 = generateRandomString($length2);
        
        echo "<h1>Generate a new word</h1>";
        echo "<p>Word 1 : $word1</p>";
        echo "<p>Word 2 : $word2</p>";

        echo '
        <form method="post">
        <button type="submit">Generate</button>
        </form>';
        echo "<br>";
        echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
        echo "<br>";

        function volume($rayon, $hauteur){
            echo $rayon*$rayon*3.14*$hauteur*(1/3);
            echo "<br>";
        }

        volume(5,2);
    

    ?>
</body>
</html>