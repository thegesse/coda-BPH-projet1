<?php
    require 'map.php';
    foreach ($storyMap as $nodeId => $nodeData) { //foreach to access and assign the outer parts of the array ex: ID and texte
        $ID  = $nodeId;
        $nodeText = $nodeData["texte"];
        $nodeChoices = []; //initialize array to store the choices
        foreach ($nodeData["choices"] as $choiceArray) { //forheach to assign the array of choices inside each node
            foreach ($choiceArray as $choiceTexte => $nextNodeId) { 
                $nodeChoices[] = [
                    "text" => $choiceTexte,
                    "nextId" => $nextNodeId
                ];
            }
        }
        $mapAttributes[$ID] = [ //to store all the data for the fucnction
        "id" => $ID,
        "texte" => $nodeText,
        "choices" => $nodeChoices
        ];

    }

    function getData($nodeId) { //stole from ai to not define the entirety of the data in the index file 
        global $mapAttributes; //global used to access stuff defined outside of the function
        return isset($mapAttributes[$nodeId]) ? $mapAttributes[$nodeId] : false;
    }
?>
