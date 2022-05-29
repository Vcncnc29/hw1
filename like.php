<?php 
    include "connessione.php";

    session_start();
    if(isset($_SESSION['nome'])){
        $conn = mysqli_connect($connessione['host'], $connessione['user'],'', $connessione['db']);

        $nome = mysqli_real_escape_string($conn,$_SESSION["nome"]);
        $query=mysqli_query($conn,"UPDATE utenti SET like_=like_ +1 WHERE nome='$nome'")or die ('ERRORE in query. '. mysqli_error($conn));
       echo "inserito";
        mysqli_close($conn);

        exit;
    }
    else{
        echo "nome non registrato oppure non hai effettuato l'accesso";
    
    }
?>