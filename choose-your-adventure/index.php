<?php
    session_start(); //found with ai, prompt "how to keep data accross page reloads"
    require 'controllers/map-attributes.php'; 

    $currentNode = isset($_SESSION["current_node"]) ? $_SESSION["current_node"] : 1; //either sets the current node at 1 or the node in use, isset used to check if current node exists or not

    if (isset($_GET["choice"]) && is_numeric($_GET["choice"])) { //asked if I could put the get function in one file for readability.
        $chosenNode = (int)$_GET["choice"];
        if (isset($storyMap[$chosenNode])) {
            $currentNode = $chosenNode;
            $_SESSION["current_node"] = $currentNode; //to update session
        }
    }

    $nodeData  = getData($currentNode);

    $texte = $nodeData["texte"];
    $choices = $nodeData["choices"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Story+Script&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Numérique Responsable</h1>
    <div class="story">
        <p><?php echo $texte ?></p>
    </div>
    <?php if (count($choices) > 0) { //checks if choices not empty?>
        <ul class="Choices">
            <?php foreach($choices as $choice) {?>
            <li>
                <a href="?choice=<?php echo $choice['nextId']; ?>"><?php echo htmlspecialchars($choice['text']);?>"></a>
            </li>
            <?php } ?>
    
        </ul>
    <?php } else{?>
        <?php session_destroy(); //not sure if I needed to include this ?>
    <?php } ?>
</body>
</html>