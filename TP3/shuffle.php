<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle</title>
</head>
<body>
    <h3 style="text-align:center">Délice des Fruites & Légumes</h3>
    <?php
        $tab = array('1.png','2.png','3.png');
        shuffle($tab);
        echo '<div style ="display:flex">';
        foreach($tab as $t)
        {
            echo '<img src="images/'.$t.'" width="300" style="flex:1; margin:0 20px">';
        }
        echo '</div>';
        ?>
        
</body>
</html>
