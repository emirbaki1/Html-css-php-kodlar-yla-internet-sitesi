<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Duru Ayakabı</title>
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
            <div class="container">
                <div class="jumbotron">
                    <h1><font color="red">Duru Ayakkabıya Hoşgeldiniz !</color></h1>
                    <p>Sizler için en kaliteli ve en şık ürünleri üretiyoruz.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinbot1.jpg" alt="Bot1">
                            </a>
                            <center>
                                <div class="caption">
                                  <h3><font color="red">Siyah Bot</font></h3> 
									      <input type="radio" name="numara" value="kadin"> 36 
                                          <input type="radio" name="numara" value="kadin"> 40                   
										  <input type="radio" name="numara" value="kadin"> 39
 
                                    <strong><p>Fiyat : 1650 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinbot2.jpg" alt="Bot2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Hardal Deri Bot</font></h3> 
								          <input type="radio" name="numara" value="kadin"> 34 
                                          <input type="radio" name="numara" value="kadin"> 36                   
										  <input type="radio" name="numara" value="kadin"> 38 
                                    <strong><p>Fiyat : 1350 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinbot3.jpg" alt="Bot3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Uzun Bilek Bot</font></h3> 
								          <input type="radio" name="numara" value="kadin"> 34 
                                          <input type="radio" name="numara" value="kadin"> 36                   
										  <input type="radio" name="numara" value="kadin"> 38                                    
								  <strong><p>Fiyat : 2100 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinbot4.jpg" alt="Bot4">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Bordo Deri Bot</font></h3> 
                                          <input type="radio" name="numara" value="kadin"> 35 
                                          <input type="radio" name="numara" value="kadin"> 36                   
										  <input type="radio" name="numara" value="kadin"> 38 
									<strong><p>Fiyat : 1499 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinspor1.jpg" alt="Spor1">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Beyaz Taban Bot</font></h3> 
                                          <input type="radio" name="numara" value="kadin"> 36 
                                          <input type="radio" name="numara" value="kadin"> 39                   
										  <input type="radio" name="numara" value="kadin"> 40 
									<strong><p>Fiyat : 550 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinspor2.jpg" alt="Spor2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Krem Yüksek Spor</font></h3> 
                                    	  <input type="radio" name="numara" value="kadin"> 35 
                                          <input type="radio" name="numara" value="kadin"> 37                   
										  <input type="radio" name="numara" value="kadin"> 38
									<strong><p>Fiyat : 850 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinspor3.JPG" alt="Spor3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Mor Columbia</font></h3> 
                                    	  <input type="radio" name="numara" value="kadin"> 38 
                                          <input type="radio" name="numara" value="kadin"> 39                   
										  <input type="radio" name="numara" value="kadin"> 41 
									<strong><p>Fiyat : 1650 TL </p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadinspor4.jpg" alt="Spor4">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Yüksek Topuk Converse</font></h3> 
                                          <input type="radio" name="numara" value="kadin"> 38 
                                          <input type="radio" name="numara" value="kadin"> 39                   
										  <input type="radio" name="numara" value="kadin"> 34 
									<strong><p>Fiyat : 975 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadintopuk1.jpg" alt="Topuk1">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Siyah Kısa Topuk</font></h3> 
                                    	  <input type="radio" name="numara" value="kadin"> 36 
                                          <input type="radio" name="numara" value="kadin"> 37                   
										  <input type="radio" name="numara" value="kadin"> 40 
									<strong><p>Fiyat : 1440 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadintopuk2.jpg" alt="Topuk2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Uzun Siyah Topuk</font></h3> 
								          <input type="radio" name="numara" value="kadin"> 38 
                                          <input type="radio" name="numara" value="kadin"> 35                   
										  <input type="radio" name="numara" value="kadin"> 41                                    
								   <strong><p>Fiyat : 875 TL </p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadintopuk3.jpg" alt="Topuk3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Uzun Kırmızı Topuk</font></h3> 
								          <input type="radio" name="numara" value="kadin"> 34 
                                          <input type="radio" name="numara" value="kadin"> 36                   
										  <input type="radio" name="numara" value="kadin"> 40                                    
								   <strong><p>Fiyat : 1750 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/kadintopuk4.jpg" alt="Topuk4">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><font color="red">Krem Kısa Topuk</font></h3> 
                                    	  <input type="radio" name="numara" value="kadin"> 33 
                                          <input type="radio" name="numara" value="kadin"> 34                   
										  <input type="radio" name="numara" value="kadin"> 39 
									<strong><p>Fiyat : 675 TL</p></strong>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Başarıyla Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Kalitenin TEK noktası © <a href="Duru Ayakkabı">Duru Ayakkabı</a> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
