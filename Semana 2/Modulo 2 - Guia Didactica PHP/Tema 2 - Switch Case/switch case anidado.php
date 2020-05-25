<?php

    $notaparcial = 4;
    $notafinal = 4;

    switch ($notafinal)
    {
        case 1:
        case 2:
        case 3:
            echo "Perdiste la materia y ";
            break;
        
        case 4:
        case 5:
            echo "Ganaste la materia y ";
            switch ($notaparcial)
            {
                case 1:
                case 2:
                case 3:
                    echo "perdiste el parcial";
                    break;

                case 4:
                case 5:
                    echo "ganaste el parcial";
                    break;
                
                default:
                    echo "error";
                    break;
            
            }
            break;

        default:
            echo "error";
            break;
    }

?>