<?php
    require 'map.php';
    foreach ($storyMap as $nodeId => $nodeData) { //foreach to access and assign the outer parts of the array ex: ID and texte
        $ID  = $nodeId;
        $nodeText = $nodeData["texte"];
        $nodeChoices = [];
        foreach ($nodeData["choices"] as $choiceArray) { //forheach to assign the array of choices inside each node
            foreach ($choiceArray as $choiceTexte => $nextNodeId) {
                $nodeChoices[] = [
                    "text" => $choiceTexte,
                    "nextId" => $nextNodeId
                ];
            }
        }
        $mapAttributes[$ID] = [ //to store all the date
        "id" => $ID,
        "texte" => $nodeText,
        "choices" => $nodeChoices
        ];

    }

    function getData($nodeId) { //stole from ai to not repeatedly redefine all the data on every new node change
        global $mapAttributes; //global used to access stuff defined outside of the function
        return isset($mapAttributes[$nodeId]) ? $mapAttributes[$nodeId] : false;
    }
?>