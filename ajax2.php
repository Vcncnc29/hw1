<?php
session_start();

 $im=array(
    array(
        "img"=>"https://media.tio.ch/files/domains/tio.ch/images/4bsd/-e-tu-quale-immagine-profilo-sei-flmw.jpg",
        "nome"=>"Ciao " .$_SESSION['nome'],
    
            )
);
echo json_encode($im);
?>