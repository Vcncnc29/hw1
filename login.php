<!DOCTYPE html>
<?php
include "connessione.php";
session_start();

if(isset($_POST["password"]) && isset($_POST['nome'])){
    $conn=mysqli_connect($connessione['host'],$connessione['user'],'',$connessione['db']);
    $error=array();
    $nome=mysqli_real_escape_string($conn,$_POST["nome"]);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $query_login="SELECT nome,password FROM utenti WHERE nome='$nome' AND password='$password'";
    $res1=mysqli_query($conn,$query_login);
    
    $row=mysqli_num_rows($res1);
  
    if($row>0){
        $_SESSION['nome']=$_POST['nome'];
        
        header("Location: sito.php");
        exit;

    }
    else{
        echo "<h2>Email o Password ERRATI</h2>";
        
    }
}

?>

<html>
    <head>
        <link href='css2.css' rel="stylesheet">
       <script src='login.js' defer='true'></script>
       <title><?php  echo "pagina di oggi".date("d-m-y") ;?></title>
    </head>
    <body>
        <main>
            <article>
            <section>
                <div class="conteiner"><h1>Inserisci Email e Password</h1>
                <form name='form' method='post'>
                    <div class='email1'>
                        <label>NOME<input type='text' name='nome'></label><div class='nome_error'><p>Nome non valida</p></div>
                    </div>
                    <div class='password1'>
                        <label>PASSWORD<input type='password' name='password'></label><div class="password_error"><p>password non inserita</p></div>
                    </div>
                    <input type='hidden' name='postid'>
                    <div class='registrazione'><?php echo "<p>Non hai un account?</p>  <a href='registrati.php'>Registrati</a>"?></div>
                    <div class="i"><label><input type='submit' value='Accedi' id="invia"></label>
                    </div>
                </form>
                </div>
            </section>
            </article>
        </main>
    </body>

</html>