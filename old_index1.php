<?php


    //-----------------------------La portée de variables-----------------------------

    // $city = "Paris";

    // function test()
    // {
    //     // echo $city;
    //     $country = "France";
    // }

    // echo $country;


    //-----------------------------Créons nos propres fonctions-----------------------------

    

    // function test(): void
    // {
    //     echo "Hello";
    // }


    // function saluer(string $firstName, string $lastName, string $typeDeSalutation = "Bonjour"): string
    // {
    //     $salutation = "$typeDeSalutation $firstName $lastName!"; 

    //     return $salutation;
    // }

    // echo saluer("Rabi", "BAH");
    // echo "<br/>";
    // // echo saluer("Cecilia", "MARTIAL", "Bonsoir");
    // echo "<br/>";
    // echo saluer("cecilia", "MARTIAL", "MARTIAL");


    // function masseVolumique(int|float $masse, int|float $volume): int|float
    // {
    //     $rho = $masse / $volume;

    //     return $rho;
    // }
    // echo masseVolumique(30, 5);


    // function calculDuPoids(int|float $masse, float $pesanteur = 9.8): int|float
    // {
    //     return $masse * $pesanteur;
    // }
    // echo calculDuPoids(14);



    // function sendEmail($recipient, $content)
    // {
    //     // khjykuyuki
    //     // iuykiuy
    //     return "Email bien envoyé";
    // }

    // $content = "Hello";
    // echo sendEmail("jp@gmail.com", $content);
    // echo "<br/>";
    // echo sendEmail("jm@gmail.com", $content);

    // function calculDuPoids($masse, $pesanteur)
    // {
    //     return $masse * $pesanteur;
    // }

    // echo calculDuPoids(14, 9.8);
    // echo "<br/>";
    // echo calculDuPoids(50, 9.8);

    // echo 14 * 9.8;
    // echo "<br/>";
    // echo 50 * 9.8;




    //-----------------------------Les fonctions natives-----------------------------
    

    // les dates

    // if (checkdate(2, 31, 2023))  
    // {
    //     echo "La date est valide.";
    // }
    // else
    // {
    //     echo "La date n'est pas valide.";
    // }

    // $seconds = mktime(0, 0, 0, 3, 3, 1993);
    // echo $seconds;

    // $semaineProchaine = time() + (8 * 24 * 60 * 60);
    // echo time();
    // echo "<br/>";
    // echo $semaineProchaine;
    // echo date("d-m-Y", $semaineProchaine);

    // echo time();

    // echo date("d/m/Y");


    // empty
    // $firstName = "";
    // if ( isset($firstName) && !empty($firstName) ) 
    // {
    //     echo "Hello $firstName!";
    // }
    // else
    // {
    //     echo "Le prénom est obligatoire.";
    // }

    
    

    // $ville = "";
    // if ( isset($ville) && !empty($ville) ) 
    // {
    //     echo "Cette ville existe.";
    // }
    // else
    // {
    //     echo "Cette ville n'existe pas.";
    // }

    // if ( isset($ville) ) 
    // {
    //     echo "Cette ville existe.";
    // }
    // else
    // {
    //     echo "Cette ville n'existe pas.";
    // }


    // str_replace
    // $great = "Hello World";
    // $great_changed = str_replace("World", "dwwm", $great);
    // echo $great_changed;


    // count
    // $users = ["Picsou", "Donald", "Daisy", "Riri", "Fifi", "Loulou"];
    // foreach ($users as $user) 
    // {
    //     echo $user. "<br/>";
    // }

    // for ($i=0; $i < count($users); $i++) 
    // { 
    //     echo $users[$i] . "<br/>";
    // }

    // $letters = ['a', 'b', 'c', 'd', 'e', 'f'];
    // $length = count($letters);
    // // echo $length;
    // for ($i=0; $i < $length; $i++)
    // { 
    //     echo $letters[$i];
    // }



    
    //-----------------------------Les boucles-----------------------------
    
    // Pour chaque 
    // $letters = ['a', 'b', 'c'];
    // foreach ($letters as $letter)
    // {
    //     echo $letter;
    // }

    // foreach ($letters as $key => $value)
    // {
        // echo "A la clé <strong>$key</strong>, nous avons comme valeur: <strong>$value</strong><br/>";
    // }
    
    
    // For (Pour)
    // $letters = ['a', 'b', 'c'];
    // for ($i=0; $i < 3; $i++) 
    // { 
    //     echo $letters[$i];
    // }
    
    // echo $letters[0];
    // echo $letters[1];
    // echo $letters[2];
    // $tab = [
    //         0 => "Lundi", 
    //         1 => "Mardi", 
    //         2 => "Mercredi", 
    //         3 => "Jeudi", 
    //         4 => "Vendredi", 
    //         5 => "Samedi", 
    //         6 => "Dimanche"
    //     ];

    // for ($i=0; $i < 7; $i++)
    // { 
    //     echo $tab[$i] . "<br/>";
    // }

    // Do While (Faire...Tant que)
    // $x = 3;
    // do 
    // {
    //     echo "Hello <br/>"; //hellohello
    //     $x++; 
    // }
    // while ($x < 5);


    // While (Tant que)
    // $x = 2;
    // while ($x <= 5) 
    // {
    //     echo "Hello <br/>";  // hellohellohellohello
    //     $x++; // 3 4 5 6
    // }


    //-----------------------------Les conditions-----------------------------

    // $heure = 17;

    // if ( $heure != 17 )
    // {
    //     echo "Il est $heure heures.";
    // }


    // Les ternaires
    // $age = 18;
    // $phrase = $age >= 18 ? "Vous êtes majeur" : "Vous êtes mineur";
    // echo $phrase;


    // $nom = "Zidane";
    // if ( $nom ) 
    // {
    //     echo "Son nom est $nom";
    // }
    // else
    // {
    //     echo "Je ne sais pas";
    // }



    // $code = "Londres est en France";
    // if ( $code == "Londres est en France" )
    // {
    //     echo "Code valide.";
    // }
    // else
    // {
    //     echo "Code non valide.";
    // }



    // $age = 12;
    // if ( $age>18 || $age==12 )
    // {
    //     echo "Je suis mineur"; 
    // }
    // else if($age > 5)
    // {
    //     echo "J'ai 100 ans";
    // }
    // else
    // {
    //     echo "Je ne sais pas.";
    // }



    //-----------------------------Opérateurs et opérations-----------------------------

        // Concaténation .

        // $club = "Club";
        // $text1 = "Fc";
        // $text2 = "Barcelone";

        // // $phrase = '$club: $text1 $text2';
        // $phrase = "$club: $text1 $text2";
        // // $phrase = $club . " " . $text1 . " " . $text2;

        // echo $phrase;




        // $age = 18;

        // $age++; // 19
        // echo $age; 

        // echo "<br/>";
        
        // $age+=15; // 34
        // echo $age;
        
        // echo "<br/>";

        // $age--;
        // echo $age; // 33
        
        // echo "<br/>";

        // $age -= 3;
        // echo $age; // 30






    //-----------------------------Les variables de type composé-----------------------------
    // $data = [
    //         "mois" => ["Janvier", "Février", "Mars"],
    //         "annees" => [ 2000, 2001, 2002]
    //     ];

    // echo "Le mois: " . $data["mois"][1] . "; L'année:" . $data["annees"][2];

    // echo "Mois: " . $data["mois"][1];
    // echo "<br/>";
    // echo "Année: " . $data["annees"][0];



    // $names = [];

    // $names[0] = "Jean Martin";
    // $names[1] = "Emmanuel";
    // $names[2] = "Matthieu";
    // $names[3] = "Adrien";
    // $names[4] = "Cecilia";
    // $names[5] = "Narimene";
    // $names[6] = "Rabiatou";
    // $names[7] = "Soufiène";
    // $names[8] = "Yanis";


    // $names[1] = "hello";

    // echo "<pre>";
    // var_dump($names);
    // echo "</pre>";


    // $data = [
    //     "mois" => ["Janvier", "Février", "Mars"],
    //     "annees" => [ 0 => 2000, 1 => 2001, 2 => 2002]
    // ];
    // echo $data["annees"][2];
    // echo $data["mois"][2];


    // Les tableaux associatifs
    // $days = [
    //             "jour1" => "Lundi", 
    //             "jour2" => "Mardi", 
    //             "jour3" => "Mercredi", 
    //             3 => "Jeudi", 
    //             "hello" => "Vendredi", 
    //             5 => "Samedi", 
    //             'test' => "Dimanche"
    //         ];
    // echo $days[6];
 



    // $data = ["a", 1, 1.1, true, ['a', 'b']];


    // $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    // $days = [
    //             0 => "Lundi", 
    //             1 => "Mardi", 
    //             2 => "Mercredi", 
    //             3 => "Jeudi", 
    //             4 => "Vendredi", 
    //             5 => "Samedi", 
    //             6 => "Dimanche"
    //         ];

    // $days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

    // var_dump($days);

    // echo $days[5]; // Lundi






    //-----------------------------Les variables de type scalaire-----------------------------


    // Boolean
    $testGrippe = true;
    $testCovid  = false;
    $resultat   = true;
    $chienGaleux = false; 
    // var_dump($chienGaleux);
    // echo "";


    // Les chaines de caractères
    $firstName = "jc";
    $lastName  = 'AZIAHA';
    $phrase    = "Hello, c'est jc";
    $phrase1   = 'Hello, c\'est jc';
    $lettre    = "a";
    $lettre2   = 'b';
    $contenu   = "Hello World";
    $text      = "Classe Mexico";
    // echo $contenu;

    
    // Les décimaux
    $moyenne = 15.5;
    $temperature = -2.5;
    $metre = 1.2;
    $taille = 1.80;
    // echo $moyenne;


    // Les entiers
    $code_postal1 = 75000;
    $chiffre = 1;
    $codePostal1 = 77000;
    $age = 25;
    // echo $code_postal1; // 75000

    


    // $bouteille = "eau";

    // echo $bouteille; // eau

    // echo "</br>"; // Retour à la ligne
    
    // $bouteille = "jus";

    // echo $bouteille; // jus


?>