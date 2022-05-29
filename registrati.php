<!DOCTYPE html>

<?php
include "connessione.php";

            session_start();
            if(isset($_SESSION["nome"])){
                header("Location: login.php");
                exit;
            }
            /*if(isset($_COOKIE["nome"])){
                header("Location: print.php");
                exit;
            }*/
           
            if(isset($_POST["nome"]) && isset($_POST["password"]) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['indirizzo'])){
                $conn=mysqli_connect($connessione['host'],$connessione['user'],'',$connessione['db']);
                $error=array();
                if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/',$_POST['nome'])){
                    $error[]="nome non valido";
                    print($error[0]);
                    echo "<a href='registrati.php'><br>Registrati</a>";
                    exit;
                }
                if(strlen($_POST['password'])<8){
                    $error[]="la password deve avere almeno 8 caratteri";
                    print($error[0]);
                    echo "<a href='registrati.php'><br>Registrati</a>";
                   exit;
                }
                if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $error[]="email non valida";
                    print($error[0]);
                    echo "<a href='registrati.php'><br>Registrati</a>";
                    exit;
                }
                if(count($error)==0){
                    $nome=mysqli_real_escape_string($conn,$_POST["nome"]);
                    $cognome=mysqli_real_escape_string($conn,$_POST["cognome"]);
                    $email=mysqli_real_escape_string($conn,$_POST["email"]);
                    $indirizzo=mysqli_real_escape_string($conn,$_POST["indirizzo"]);
                    $password=mysqli_real_escape_string($conn,$_POST['password']);

                    $query_cerca="SELECT email,nome FROM  utenti where email='$email' AND nome='$nome'";
                    $res_cerca=mysqli_query($conn,$query_cerca) or die("errore".msqli_error($conn));
                    if(mysqli_num_rows($res_cerca)==0){
                        $query="INSERT INTO utenti(nome,cognome,email,indirizzo,password,like_) VALUES('$nome','$cognome','$email','$indirizzo','$password','0')";
                        $res=mysqli_query($conn,$query) or die("errore".msqli_error($conn));
                        $_SESSION['nome']=$_POST['nome'];
                        header("Location: login.php");
                        
                    }

                    else{
                        echo "<div><h1>Il nome  o l'email è già in uso</h1></div>";                        
                       echo "<p><strong>Vai alla pagina di<a href='login.php'>Login</a></strong></p>";
                       

                    }
                  
                }
              
            }
        ?> 
<html>
    <head>
        <link href="css2.css" rel="stylesheet">
        <script src="regis.js" defer="true"></script>
        <title>
            <?php 
            echo "pagina di oggi".date("d-m-y") ;

            ?>
        </title>
    </head>
    <body>
        <main>
            <article>
                <section>
                    <div class="conteiner"><h1>Inserisci Email e Password</h1>
                        <form name='form' method='post' id="a">
                            <div class="nome1">
                                <label>NOME<input type='text' name='nome'></label><div class='nome_error'><p>nome non valido</p></div>
                            </div>
                            <div class="cognome1">
                                <label>COGNOME<input type='text' name='cognome'></label><div class='cognome_error'><p>cognome non valido</p></div>
                            </div>
                            <div class="email1">
                                <label>EMAIL<input type='text' name='email'></label><div class='email_error'><p>email non valida</p></div>
                            </div>
                            <div class="indirizzo1">
                                <label>INDIRIZZO<input type='text' name='indirizzo'></label><div class='indirizzo_error'><p>indirizzo non valido</p></div>
                            </div>
                            <div class="password1">
                                <label>PASSWORD<input type='password' name='password'></label><div class='password_error'><p>la password deve contenere almeno 8 caratteri</p></div>
                            </div>
                            <div class="conf_password1">
                                <label>CONFERMA PASSWORD<input type='password' name='conf_password'></label><div class='conf_password_error'><p>la password non coincide</p></div>
                            </div>
                            <div class='login'><?php echo "<p>Hai già un account? Effettua l'accesso</p><a href='login.php'>clicca qui</a>"?></div>
                            <div class="i">
                                <label><input type='submit' value='Registrati' id="invia"></label>
                            </div>
                        </form>
                    </div>
                </section>
        </article>
        </main>
    </body> 
</html>    
