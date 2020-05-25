<?php

    $velocidad = 69;

    if ($velocidad >= 0 and $velocidad <= 30)
    {
        echo "Zonas Escolares";
    }
    else if ($velocidad > 30 and $velocidad <= 60)
    {
        echo "Vias Urbanas";
    }
    else if ($velocidad > 60 and $velocidad <= 80)
    {
        echo "Vias Rurales";
    }
    else if ($velocidad > 80 and $velocidad <= 100)
    {
        echo "Rutas Nacionales";
    }
    else
    {
        echo "Esta excediendo los limites de velocidad";
    }

?>