<?php
    $storyMap = [
        1 => [
            "texte" => "Tu reçois un appel d'un numéro inconnu, que fais-tu?",
            "choices" => [
                ["J'aime me faire harceler par les démarcheurs téléphoniques, je décroche." => 2],
                ["C'est peut-être l'Ursaff, je ne décroche pas." => 3],
                
            ],
        ],
        2 => [
            "texte" => "C'était ton pote, malheureusement. \n Il t'appelle depuis son fossile de téléphone fixe pour te poser une question.",
            "choices" => [
                ["Je lui réponds bien sûr, j'ai une âme charitable." => 4],
                ["Le téléphone utilise de la bande passante et ça pollue donc je raccroche." => 5]
            ],
        ],
        3 => [
            "texte" => "Bravo tu as évité le risque de te faire attraper par l'Urssaf, mais pas pour longtemps. All roads lead to Urssaf",
            "choices" => [
                ["Je fracase le quatrieme mur pour reccomencer" => 1]
            ],
        ],
        4 => [
            "texte" => "Il te raconte qu'il a casser son téléphone comme un con",
            "choices" => [
                ["skill issue, ensuite tu raccroche le téléphone car il faut economiser la bande passante" => 5],
                ["Tu lui propose de reparer son téléphone" => 6],
                ["Tu lui propose de racheter un téléphone neuf" => 7]
            ],

        ],
        5 => [
            "texte" => "Tu a racrocher au nez de ton pote bravo il est triste maintenant",
            "choices" => [
                ["Recomencer?" => 1]
            ],
        ],
        6 => [
            "texte" => "Tu lui propose de reparer son téléphone mais il sait pas comment",
            "choices" => [
                ["Ayant la flemme tu lui dit de demander a chatgtp comment reparer son telephone" => 8],
                ["Tu dicte l'addresse d'une entreprise local qui fait reparation de téléphone mais ca coutera plus cher" => 9]
            ],

        ],
        7 => [
            "texte" => "Ton pote, te dit qu'un nouveau téléphone coute cher",
            "choices" => [
                ["Tu traite ton pote de pauvre et lui dit de racheter un iphone 17 pro max" => 10],
                ["Tu lui indique le fait que le reconditionner existe et coute moins cher qu'un nouveau telephone" => 11]
            ],

        ],
        8 => [
            "texte" => "Il a suivit les instruction de chatgpt mais le téléphone ne se rallume plus. \n Portefeuille: -150€ \n Empreinte carbone: 12kg CO2e",
            "choices" => [
                ["reccomencer" => 1]
            ],

        ],
        9 => [
            "texte" => "Le telephone est reparer. \n Portefeuille: -150€ \n Empreinte carbone: 10kg CO2e",
            "choices" => [
                ["recommencer" => 1]
            ],

        ],
        10 => [
            "texte" => "Il a racheter l'iphone. \n Portefeuille: -1479€ \n Empreint carbone: 70kg CO2e",
            "choices" => [
                ["Bravo tu a polluer et ton pote est pauvre, recomencer?" => 1]
            ],
        ],
        11 => [
            "texte" => "Il a acheter un téléphone reconditionné. \n Portefeuille: -450€ \n Empreint carbone: 10kg CO2e",
            "choices" => [
                ["Choisit L'iphone avec un mauvais indice de reparation" => 13],
                ["Choisit un Xiaomi mais avec un bon indice de reparation" => 14]
            ],
        ],

    ]
?>