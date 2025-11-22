<?php
    session_start(); //found with ai, prompt "how to keep data accross page reloads" is needed to store choices aswell, anything involving session is either found with ai or on stackoverflow
    require 'controllers/map-attributes.php'; 

    $currentNode = isset($_SESSION["current_node"]) ? $_SESSION["current_node"] : 1; //either sets the current node at 1 or the node in use, isset used to check if current node exists or not

    if (isset($_GET["choice"]) && is_numeric($_GET["choice"])) { //asked if I could put the get function in one file for readability. Guessed the AND operator from Java
        $chosenNode = (int)$_GET["choice"];
        if (isset($storyMap[$chosenNode])) {
            $currentNode = $chosenNode;
            $_SESSION["current_node"] = $currentNode; //to update session
        }
    }

    
?>