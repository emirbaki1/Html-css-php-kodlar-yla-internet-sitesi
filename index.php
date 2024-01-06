<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Duru Ayakkabı</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   
                       <h1><font color="black">Kalitenin Tek Adresi</font></h1><br></br>
                      <a href="products.php" class="btn btn-danger">Alışverişe Başla</a><br></br> <br></br> 
				   
				   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/kadinbot.jpg" alt="Bot">
                           </a>
                           <center>
                                <div class="caption">
                                        <b><p id="autoResize">Kadın Bot</p></b>
                                        <p>Tam kalıp,özel deriden imal edilmiş,yeni seri botlarımız.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/kadinspor.jpeg" alt="Spor">
                           </a>
                           <center>
                                <div class="caption">
                                   <b> <p id="autoResize">Kadın Spor Ayakkabı</p></b>
                                    <p>Tam kalıp,yeni nesil malzemeler ile üretilmiş ürünlerimiz.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/kadintopuk.jpeg" alt="Topuklu">
                           </a>
                           <center>
                               <div class="caption">
                                  <b> <p id="autoResize">Kadın Topuklu Ayakkabı</p></b>
                                  <p>Tam kalıp yazlık,tarz ve şık uzun topuklu modellerimiz.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Kalitenin TEK noktası &copy <a>Duru Ayakkabı</a>              
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>