<?php
    $storyMap = [
        1 => [
            "texte" => "You wake up at the foot of a tree with a splitting headache. You look around and see a rough looking man, blond hair in braids talking to you <br> 'hey you, you're finally awake' he tosses you a bag of coins and a parchement before pointing to a forest 'fetch' he tells you before leaving. <br> You unroll the parchement and see a picture of a artefact, you look up and see a large forest with a village next to it, <br> what do you do?",
            "choices" => [
                ["enter the forest alone" => 2],
                ["visit the village for clues" => 3],
                ["go around the forest to scout ahead for a safe path" => 4]
            ],
        ],
        2 => [
            "texte" => "You decide to go into the forest alone not knowing what awaits or even where this artefact was. After an hour of wandering aimlessly you see something that catches you eye, glowing tracks; tracks you do not recognize but for some reason they intrigue you",
            "choices" => [
                ["follow the tracks and find out what beast laid them" => 5],
                ["avoid them and take a less perilous path" => 6]
            ],
        ],
        3 => [
            "texte" => "You decide to head to the village, still hungover to ask questions about the artefact, you are met with avoidant gazes and cryptic responses about a certain 'beast'. You look around for an hour before finally someone answers you, the town drunk, he warns you about the same beast but he does give you a map leading to the artefact before pointing you thowards the forest",
            "choices" => [
                ["ask him for a bit more help, and how to avoid or face the beast" => 7],
                ["take the ramblings of the town drunk with a little bit of salt and proceed into the forest to where the aretfact is marked on the map" => 8]
            ],
        ],
        4 => [
            "texte" => "you decide to scout ahead and go around the massive forest, after hours of walking you see a cave",
            "choices" => [
                ["go into the cave to explore and maybe rest a bit" => 9],
                ["mark the cave for later and finally go into the forest to get the artefact" => 10]
            ],
        ],
        5 => [
            "texte" => "as curiousity got the better of you, you decide to follow the tracks and find out what kind of animal leaves tracks as unique as these. As you approach a cave you spot it; a dragon it looks small it must be young, but still recognizable scales thicker than any manmade shield or armor, wings bigger than a town 2 powerful front legs and thankfully its sleeping. 'a zilant' you muble in awe",
            "choices" => [
                ["wake the beast up" => 11],
                ["get the hell out of there" => 13]
            ],
        ],
        6 => [
            "texte" => "You decide to avoid the tracks and find another path. Everything is calm during your walk until suddenly jumping down from the trees bandits, all of them heavily armed, they must have spotted you entering with a large sum of money",
            "choices" => [
                ["run away" => 11],
                ["try and fight them" => 14]
            ],
        ],
        7 => [
            "texte" => "After taking the charm you decide to walk down the path of the map the town drunk gave you, you eventually arrive at a cave with a dragon sleeping ontop of a massive horde, your artefact in the middle",
            "choices" => [
                ["wake the dragon up" => 11],
                ["decide the rest of the gold isnt worth it and leave with your life and a small ammount of gold" => 13]
            ],
        ],
        8 => [
            "texte" => "You walk confidently into the forest with the map you grabbed from the drunk ignoring his warnings, after all beasts arent real they are only fairytail. After walking for hours on end you reach the cave, and see you were wrong mosnters are real and this "
        ]
    ]
?>