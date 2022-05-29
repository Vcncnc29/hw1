<pre>
    <?php
    include "connessione.php";
        session_start();
       if(isset($_SESSION['nome'])) {
        $conn=mysqli_connect($connessione['host'],$connessione['user'],'',$connessione['db']);
        $nome = mysqli_real_escape_string($conn,$_SESSION["nome"]);
        $query=mysqli_query($conn,"UPDATE utenti SET like_ = 0 WHERE nome='$nome'")or die ('ERRORE in query. '. mysqli_error($conn));
        session_destroy();
        }
    
    ?>
</pre>
<html>
    <head>
        <link href='logout.css'  rel="stylesheet">
    </head>
    <body>
        <div class='sopra'>
        <h1>ARRIVEDERCI</h1>
        <span>Per il login <a href="login.php">clicca qui</a></span>
        </div>
    </body>
</html>