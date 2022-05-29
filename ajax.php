<?php
session_start(); 
$evento=array(
    /*"vincenzo"=>
        array(
        "cuore"=>"https://emojigraph.org/media/emojipedia/white-heart_1f90d.png",
        "carrello"=>"https://cdn-icons-png.flaticon.com/512/107/107831.png"
        ),*/
    
      "data"=>array(
        array(
            "img1"=>"https://www.techweekeurope.it/public/classifiche/129/icona.jpg"
        
      ),
      array(
        "img2"=>"https://acquisti.corriere.it/wp-content/uploads/2020/09/Progetto-senza-titolo-2020-09-30T020424.809-1152x600.png"
       
        ),
        array(
            "img3"=>"https://dday.imgix.net/system/uploads/news/main_image/38052/ccac57_OLED_notebook.jpg?ar=702%3A360&fit=crop&auto=format%2Ccompress&s=ea2b3c32c82c9bd3844b66b193d12eb0"
        ),array(
            "img4"=>"https://i0.wp.com/effemeride.it/wp-content/uploads/2021/05/Asus-ZenBook-Duo-14-2021-miglior-portatile-a-doppio-schermo.jpg?resize=1366%2C768&ssl=1"
        ),
        array(
          "img5"=>"https://hd2.tudocdn.net/976590?w=824&h=494"
        ),
        array(
          "img6"=>"https://notebookarena.it/wp-content/uploads/2021/01/Huawei-MateBook-13-1.jpg"
        ),
        array(
          "img7"=>"https://img.wallpapic.it/i8624-629-223/medium/computer-portatile-alienware-netbook-tecnologia-sfondo.jpg"
        ),
        
        array(
          "img8"=>"https://www.giardiniblog.it/wp-content/uploads/2018/02/quale-notebook-comprare.jpg"
        )
      )
);

    echo json_encode($evento); 
   
?>
