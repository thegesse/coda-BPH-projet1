<?php
    $storyMap = [
        1 => [
            "texte" => "Tu reçois un appel d'un numéro inconnu, que fais-tu ?",
            "choices" => [
                ["J'aime me faire harceler par les démarcheurs téléphoniques, je décroche" => 2],
                ["C'est peut-être l'Urssaf, je ne décroche pas" => 3],
                
            ],
        ],
        2 => [
            "texte" => "C'était ton pote, malheureusement. \n Il t'appelle depuis son fossile de téléphone fixe pour te poser une question.",
            "choices" => [
                ["Je lui réponds bien sûr, j'ai une âme charitable" => 4],
                ["Le téléphone utilise de la bande passante et ça pollue donc je raccroche" => 5]
            ],
        ],
        3 => [
            "texte" => "Bravo, tu as évité le risque de te faire attraper par l'Urssaf, mais pas pour longtemps. All roads lead to Urssaf.",
            "choices" => [
                ["Je fracasse le quatrième mur pour recommencer" => 1]
            ],
        ],
        4 => [
            "texte" => "Il te raconte qu'il a cassé son téléphone. Quel abruti.",
            "choices" => [
                ["Skill issue, tu raccroches le téléphone car il faut économiser la bande passante" => 5],
                ["Tu lui proposes de réparer son téléphone" => 6],
                ["Tu lui proposes de racheter un téléphone neuf" => 7]
            ],

        ],
        5 => [
            "texte" => "Tu as raccroché au nez de ton pote. Bravo, il est triste maintenant.",
            "choices" => [
                ["Recommencer?" => 1]
            ],
        ],
        6 => [
            "texte" => "Tu lui proposes de réparer son téléphone mais il ne sait pas comment.",
            "choices" => [
                ["Ayant la flemme tu lui dit de demander a ChatGPT comment réparer son téléphone" => 8],
                ["Tu dictes l'adresse d'une entreprise locale qui fait de la réparation de téléphone mais ca coûtera plus cher" => 9]
            ],

        ],
        7 => [
            "texte" => "Ton pote te dit qu'un nouveau téléphone coûte cher.",
            "choices" => [
                ["Tu traites ton pote de pauvre et lui dit de racheter un iPhone 17 Pro Max" => 10],
                ["Tu lui indiques le fait que le reconditionné existe et coûte moins cher qu'un nouveau téléphone" => 11]
            ],

        ],
        8 => [
            "texte" => "Il a suivi les instructions de ChatGPT mais le téléphone ne se rallume plus. \n Portefeuille: -150€ \n Empreinte carbone: 12kg CO2e",
            "choices" => [
                ["recommencer" => 1]
            ],

        ],
        9 => [
            "texte" => "Le téléphone est réparé. \n Portefeuille: -150€ \n Empreinte carbone: 10kg CO2e",
            "choices" => [
                ["recommencer" => 1]
            ],

        ],
        10 => [
            "texte" => "Il a racheté l'iPhone. \n Portefeuille: -1479€ \n Empreinte carbone: 70kg CO2e",
            "choices" => [
                ["Bravo, tu a pollué et ton pote est pauvre, recommencer?" => 1]
            ],
        ],
        11 => [
            "texte" => "Il a acheté un téléphone reconditionné. \n Portefeuille: -450€ \n Empreinte carbone: 10kg CO2e",
            "choices" => [
                ["recommencer" => 1]
            ],
        ],

    ]
?>