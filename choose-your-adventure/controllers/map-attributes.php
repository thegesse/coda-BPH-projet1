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
                    "nextId" => $nextNode
                ];
            }

        }
    }
?>