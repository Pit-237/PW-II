<?php
    $idade = 12;

    if ($idade <= 13) {
        echo "Criança";
    }
    elseif($idade < 18){
        echo "Adolescente";
    }
    elseif ($idade <= 60) {
        echo "Adulto";
    }
    else {
        echo "Idoso";
    }
?>