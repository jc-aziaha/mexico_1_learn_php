# Dwwm Mexico: 1_learn_php

- Apprenons les bases du langage PHP

## Resumé

- Php est un langage Backend.
- Ses rôles:
    - Recevoir la requête du client
    - La traiter
    - Lui retourner la réponse correspondante

- Se positionner dans 'htdocs' ou 'www' en fonction du logiciel (xampp ou mamp...)
- Créer le dossier et y créer l'index.php

### Les variables
    - Les variables de type scalaire (4)
        - Les entiers
        - Les nombres à virgule
        - Les chaînes de caractères
        - Le boolean
    - Les variables de type composé (2)
        - Les tableaux 
        - Les objets
    - Les variables de type composé (2)
        - Null
        - Resource

### Les conditions
    - if 
    - if elseif
    - if elseif elseif
    - if elseif elseif else
    - if else
    - Opérateur (&&, ||, >, <, >=, <=, ==, ===)
    - Les ternaires

### Les boucles
    - for (Pour)
        - Bien comprendre l'utilité de $i surtout lors de l'affichage des données d'un tableau
    - foreach (Pour chaque)
        - foreach avec $key
        - foreach sans $key

### Les fonctions
    - Fonctions natives
        - Pas besoin d'apprendre par coeur
        - Le plus important, c'est de savoir comment chercher l'information dont vous avez besoin sur le web
    - Fonctions créées par nous-même
        - Bien comprendre le typage des paramètres
        - Bien comprendre le typage de la valeur de retour

### PHP et HTML
    - La fonction include et require
    - Eviter le code spaguetti en adoptant la bonne syntaxe en mélageant du HTML et du PHP
        <?php if(true) : ?>
        <?php else : ?>
        <?php endif ?>

### Les formulaires
    - Bien revoir les formulaires HTML
    - Comprendre l'utilité des variables superglobales $_GET, $_POST, $_FILES(enctype...), $_SESSION (session_start())

### Bonus
    - Toujours se rappeler de commencer par le début
    - Essayer de se mettre à la place du code pour mieux comprendre son interprétation
    - Se rappeler de toujours lire de haut en bas
    - Répéter autant de fois que nécessaire pour sauvegarder les automatismes dans la mémoire du corps et dans le subconscient.
    