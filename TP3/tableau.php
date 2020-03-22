<?php

        $fp = fopen("commandes.txt","r");
        echo '<h2>Central d\'achat</h2> <h4>Commande clients</h4>
        <table border="1">
        <thead style="background: aqua">
        <tr>
        <th>Numéro de commande</th>
        <th>Numéro de client</th>
        <th>Date de commande</th>
        <th>Designation</th>
        <th>Quantite</th>
        <th>Prix Unitaire</th>
        </tr>
        </thead>
        <tbody>';
        while(!feof($fp))
        {
            echo '<tr>';
            list($numcommande,$numclient,$datecommande,$designation,$quantite,$prixu) = explode (' | ' , fgets($fp,1024));
            echo  "<td>$numcommande</td>";
            echo "<td>$numclient</td>";
            echo "<td>$datecommande</td>";
            echo "<td>$designation</td>";
            echo "<td>$quantite</td>";
            echo "<td>$prixu</td>";
            echo '</tr>';

        }
        echo '</tbody>';
        echo '</table>';
    
        fclose($fp);

?>