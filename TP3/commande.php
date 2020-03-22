<?php

        $fp = fopen("commandes.txt","r");
        $tab = array();
        $i=0;
        while(!feof($fp))
        {
            $tab[$i] = fgets($fp,1024);           
            $i++;
        }

        foreach($tab as $t)
        {
            echo $t;
            echo '<br>';
        }
    
        fclose($fp);

?>