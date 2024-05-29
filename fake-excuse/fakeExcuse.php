<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        <label for="name">Entrez le nom de votre enfant :</label><input type="text" id="name" name="name"><br>
        <label for="garcon">Garçon</label><input type="radio" name="gender" id="garcon" value="garcon"><br>
        <label for="fille">Fille</label><input type="radio" name="gender" id="fille" value="fille"><br>
        <label for="teacher">Entrez le nom du professeur :</label><input type="text" id="teacher" name="teacher"><br>
        <label for="absence">La raison de l'absence :</label><br>
        <input type="radio" name="absence" id="illness" value="illness"><label for="illness">Maladie</label><br>
        <input type="radio" name="absence" id="death" value="death"><label for="death">Mort d'un animal (ou éventuellement d'un membre de la famille)</label><br>
        <input type="radio" name="absence" id="extra" value="extra"><label for="extra">Activité extra-terrestre</label><br>
        <input type="radio" name="absence" id="other" value="other"><label for="other">Autre excuse</label><br>
        <input type="submit" value="Générer">
    </form>
    
    <?php
        if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['absence'])) {
            $name = htmlspecialchars($_GET['name']);
            $gender = htmlspecialchars($_GET['gender']);
            $teacher = htmlspecialchars($_GET['teacher']);
            $absence = htmlspecialchars($_GET['absence']);

            $genderText = ($gender == "garcon") ? "mon fils" : "ma fille";

            switch ($absence) {
                case 'illness':
                    $mot = "Cher Professeur {$teacher},<br>
                    <br>
                    Je vous écris pour vous informer que {$genderText} ne pourra pas assister aux cours aujourd'hui en raison d'une maladie mystérieuse et très contagieuse appelée 'paressite aigüe'. Les symptômes incluent une incapacité totale à se lever du lit, une attraction irrésistible pour Netflix et une éruption cutanée en forme de chips sur tout le corps. Je préfère rester à la maison pour éviter de contaminer toute la classe.<br>
                    <br>
                    Cordialement,<br>
                    Le papa de {$name}";
                    break;
                case 'death':
                    $mot = "Cher Professeur {$teacher},<br>
                    <br>
                    Je regrette de vous informer que {$genderText} ne pourra pas assister aux cours aujourd'hui car nous avons perdu un membre très cher de notre famille : notre poisson rouge, Maurice. Maurice était plus qu'un poisson, il était un philosophe aquatique. Il m’a appris des leçons de vie importantes, comme la patience (surtout quand on attendait qu'il fasse des bulles). Sa disparition nous plonge dans un profond désarroi et nous organisons une cérémonie d'adieu ce matin dans les toilettes.<br>
                    <br>
                    Avec tristesse,<br>
                    Le papa de {$name}";
                    break;
                case 'extra':
                    $mot = "Cher Professeur {$teacher},<br>
                    <br>
                    Je vous écris pour vous informer de l'absence de {$genderText} aujourd'hui. Mon enfant a été enlevé par des extraterrestres hier soir. Ils étaient très curieux de nos habitudes humaines et ont voulu qu'il leur explique les mathématiques modernes. Malheureusement, leur vaisseau est tombé en panne d'anti-matière et ils ont dû attendre un dépannage intergalactique. Ils sont rentrés sains et saufs, mais il lui faudra la journée pour se remettre du décalage horaire intersidéral.<br>
                    <br>
                    Galactiquement vôtre,<br>
                    Le papa de {$name}";
                    break;
                default:
                    $mot = "Cher Professeur {$teacher},<br>
                    <br>
                    Je tiens à vous informer que {$genderText} ne pourra pas venir en classe aujourd'hui car nous avons un rendez-vous très important avec le destin. En effet, il se trouve que nous avons découvert ce matin un vieux parchemin familial qui nous indique que je suis l'héritier secret d'un trône oublié. Je dois partir immédiatement pour récupérer mon royaume et léguer mes droits royaux à {$genderText}. Je vous promets de revenir une fois que nous avons réglé cette petite affaire de couronne.<br>
                    <br>
                    Majestueusement vôtre,<br>
                    Le papa de {$name}";
                    break;
            }
            echo $mot;
        }
    ?>

</body>
</html>