<?php
include 'php/config.php';
criaHeader('Equipes');


for($indice=1; $indice <=3; $indice++) {
    criaEquipe($indice);
}


criaFooter();
?>

