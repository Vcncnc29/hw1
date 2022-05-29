
    <?php
    session_start();
    
    /*if(!isset($_COOKIE["nome"])){
        header("location: a.php");
        exit;
    }*/
    if(!isset($_SESSION['nome'])){
        echo "<strong><p>Non ti sei loggato</p><br><p>per il log <a href='login.php'>clicca qui</a></p></strong>";
        session_destroy();
        exit;
    }
       
    ?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="ajax.css" rel="stylesheet">
        <script src="ajax.js" defer="true"></script>    
        <title><?php  echo "pagina di oggi".date("d-m-y") ;?></title>
    </head>
    <body> 
        <article>
        <nav><div class='log'>
            <form name='f' class='fform' method='post'>
            <label class='lab'>Cerca altri modelli<input type='text' name='inserisci' class='in'/></label>
            <input type='submit' value='Cerca' class='subm'>
            </form>

            <strong><a href='logout.php'>Logout</a></strong></div>
        </nav>
            <div class='nome'>
            <section class="utente"></section>
            </div> 

       
         <div class='super'>
         <div class='conteiner'>
            <div class="uno">
                <div class='one'><div class='a'>
            <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
            
            </div></div></div> 
            
           
            <div class="due"><div class='one'><div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
              
            </div><div class='two'></div></div></div> 
         
            <div class="tre"><div class='one'><div class='a'>
            <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
            
            </div> <div class='two'></div></div></div> 
            
            <div class="quattro"><div class='one'> <div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
               </div> 
                <div class='two'></div></div></div> 
           
            <div class="cinque">
                <div class='one'><div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
                
            </div></div> </div>
           
            <div class="sei">
                <div class='one'><div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
                
            </div></div> </div>
           
            <div class="sette">
                <div class='one'><div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
                
            </div></div> </div>
           
            <div class="otto">
                <div class='one'><div class='a'>
                <img class='cuore' src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"/>
               
            </div></div> </div>

            
                </div> 
            </div>    
            <div class='super2'>
            <div class=img_super2>
                <div class='super4'>
                    </div>
                </div>
            </div>
        
          
        </article>
       
    </body>
</html>
<!--il sito lo creo qua e poi tramite api rest (ajax.php) e aggiungo img con js-->