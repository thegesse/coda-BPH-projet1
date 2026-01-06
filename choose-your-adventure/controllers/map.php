<?php
    $storyMap = [
        1 => [
            "texte" => "Tu recois un appel d'un numéro inconnu, que fait tu?",
            "choices" => [
                ["J'aime me faire harceler par les démarcheurs téléphoniques, je décroche" => 2],
                ["C'est peut être l'Ursaff, je ne decroche pas" => 3],
                
            ],
            "image" => [ ],
        ],
        2 => [
            "texte" => "C'etais ton pote malheureusement \n Il t'appel depuis son fossile de téléphone fixe pour te poser une question",
            "choices" => [
                ["Je lui dit repond bien sur, j'ai une âme charitable" => 4],
                ["Le téléphone utilise la bande passante et ca pollue donc je raccroche" => 5]
            ],
            "image" => [ ],
        ],
        3 => [
            "texte" => "Bravo tu as eviter le risque de te faire attrapper par l'urssaf, mais pas pour longtemps All roads lead to Urssaf",
            "choices" => [
                ["Je fracase le quatrieme mur pour reccomencer" => 1]
            ],
            "image" => ["../assets/images/macronUrssaf.png"],
        ],
        4 => [
            "texte" => "Il te raconte qu'il a casser son téléphone comme un con",
            "choices" => [
                ["skill issue, ensuite tu raccroche le téléphone car il faut economiser la bande passante" => 5],
                ["Tu lui propose de reparer son téléphone" => 6],
                ["Tu lui propose de racheter un téléphone neuf" => 7]
            ],
            "image" => [ ],
        ],
        5 => [
            "texte" => "Tu a racrocher au nez de ton pote bravo il est triste maintenant",
            "choices" => [
                ["Recomencer?" => 1]
            ],
            "image" => ["../assets/images/crying.png"],
        ],
        6 => [
            "texte" => "Tu lui propose de reparer son téléphone mais il sait pas comment",
            "choices" => [
                ["Ayant la flemme tu lui dit de demander a chatgtp comment reparer son telephone" => 8],
                ["Tu dicte l'addresse d'une entreprise local qui fait reparation de téléphone mais ca coutera plus cher" => 9]
            ],
            "image" => [ ],
        ],
        7 => [
            "texte" => "Ton pote, te dit qu'un nouveau téléphone coute cher",
            "choices" => [
                ["Tu traite ton pote de pauvre et lui dit de racheter un iphone 17 pro max" => 10],
                ["Tu lui indique le fait que le reconditionner existe et coute moins cher qu'un nouveau telephone" => 11]
            ],
            "image" => [ ],
        ],
        8 => [
            "texte" => "Il a suivit les instruction de chatgpt mais le téléphone ne se rallume plus",
            "choices" => [
                ["reccomencer" => 1]
            ],
            "image" => ["../assets/images/angry.png"],
        ],
        9 => [
            "texte" => "Le telephone est reparer mais son portefeuille est vide",
            "choices" => [
                ["recommencer" => 1]
            ],
            "image" => ["../assets/images/wojak.png"],
        ],
        10 => [
            "texte" => "Il a racheter l'iphone a 1479€",
            "choices" => [
                ["Bravo tu a polluer et ton pote est pauvre, recomencer?" => 1]
            ],
            "image" => ["../assets/images/crying.png"],
        ],
        11 => [
            "texte" => "Il a trouver 2 telephone reconditioner et te demande lequel choisir",
            "choices" => [
                ["Choisit L'iphone avec un mauvais indice de reparation" => 13],
                ["Choisit un Xiaomi mais avec un bon indice de reparation" => 14]
            ],
            "image" => ["../assets/images/front_teeth.png"],
        ],

    ]
?>