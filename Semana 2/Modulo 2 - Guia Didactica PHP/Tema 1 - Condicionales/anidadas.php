<?php

    $dolar = 2981;

    if ($dolar >= 0)
    {
        if ($dolar > 0 and $dolar <= 1000)
        {
            echo "El dolar tiene un valor bajo";
        }
        else if ($dolar > 1000 and $dolar <= 2000)
        {
            echo "El dolar tiene un valor medio bajo";
        }
        else if ($dolar > 2000 and $dolar <= 3000)
        {
            echo "El dolar tiene un valor alto";
        }
        else if ($dolar > 3000)
        {
            echo "El dolar tiene un valor muy alto";
        }
    }
    else
    {
        echo "El dolar no puede ser un valor negativo";
    }

?>