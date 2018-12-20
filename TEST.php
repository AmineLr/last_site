<?php

    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",$mH );
    
    
     
    }
   for( $j = 0; $j < 8 ;$j++)

    {
         if($mH >= $j)
        {
         echo("$j\n");     
        }
        else
        {
            echo("$i\n");
        }

    }

?>