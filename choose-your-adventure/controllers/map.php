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
                ["run away into the nearest cave and risk awakening its inhabitants" => 11],
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
            "texte" => "You walk confidently into the forest with the map you grabbed from the drunk ignoring his warnings, after all beasts arent real they are only fairytail. After walking for hours on end you reach the cave, and see you were wrong mosnters are real and this thing. this massive dragon snoring thankfully. Is very much real",
            "choices" => [
                ["swallow your pride and admit the old drunk was right and run away" => 13],
                ["don't swallow your pride and face the dragon with your bare two hands, after all its standing between you and your precious artefact, and bounty reward" => 14]
            ],
        ],
        9 => [
            "texte" => "You wander into the cave, it isnt some normal cave its massive, in fact so big you decide to rest, you lay down and finally nurse that hangover. When waking up this whole thing seemed like a dream so you pack your things and walk away safe a few gold coins richer with a weird dream to retell",
            "choices" => [
                ["congratulations you got 'and it was all a dream'. Play again?" => 1]
            ],
        ],
        10 => [
            "texte" => "after marking the cave for later wether it be to hide treasure or for a future exploration you head for the forest. You walk for hours on end before stumbling infront of a cave, with piles of gold, jewelry, precious stones. The only problem, a massive dragon sleeping atop it",
            "choices" => [
                ["wake the beast" => 11],
                ["maybe waking up wasnt the best option today, I'll go back to bed I guess" => 13]
            ],
        ],
        11 => [
            "texte" => "Welp, congratulations you have awoken a dragon, it looks angry 'who dares awaken my slumber' its voice booms accross the cave walls as it spreads its wings in an attempt to be intimidating. it then looks down at you and seems amused 'very well human tell me why you are here and I may let you live'",
            "choices" => [
                ["tell it the truth that you want the artefact" => 15],
                ["try and intimidate it into handing you the artefact" => 14],
                ["apologize and turn away to leave" => 13]
            ],
        ],
        13 => [
            "texte" => "Congratulations you are smart, you have decided the risk isnt worth the reward and turned to leave. No one knows your name anyways and besides no one will be missing this small bag of gold coins right?",
            "choices" => [
                ["Bravo, you got 'survivors instincts'. Play again?" => 1]
            ],
        ],
        14 => [
            "texte" => "Too bad you died, this isnt some fairytail you know? You cant just brute force your way through everything you know?",
            "choices" => [
                ["Congratulations *read with heavy sarcasm* you got 'the bad ending', play again?" => 1]
            ],
        ],
        15 => [
            "texte" => "The dragon scoffs and hands you the artefact as if it was some piece of junk. But who cares you did it, you succeded in your inpromptue quest. You then return to the village to claim the rest of your gold from that strange blond man in excahnge for the artefact. You then pay a hotel room to finally take care of that hangover",
            "choices" => [
                ["Congratulations you actually did it, you got 'all in a days work', play again?" =>]
            ],
        ],
    ]
?>