<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php
  include "head.php";
?>

  <script type="text/javascript">
    $(function() {
      $('.gallery a').lightBox();
    });
   </script>    
</head>
<body>
<div class="header">                                                                                  
  <div class="wrap">                                                                                
     <div class="header-top">                                                                       
          <div class="logo">                                                                        
        
      </div>                                                                                    
      <div class="phone">                                                                       
                                                  
      </div>                                                                                    
      <div class="clear"></div>                                                                 
      </div>                                                                                        
  </div>                                                                                            
  <div class="header-bottom">                                                                       
    <div class="wrap">                                                                            
    <div id="cssmenu" style="width:1250px">
    <?php
    session_start();
    //echo $_SESSION['idcust'];
    require 'connect_db.php';
    $sql= "SELECT distinct jenis FROM jenishewan where jenis != 'ular'";
    $result = mysqli_query($mysql,$sql);
    $a=1;
    ?>
       <ul>
         <li class="has-sub"><a href="index.php"><span>Home</span></a></li>
         <li class="has-sub"><a href=""><span>Produk</span></a>
            <ul>
              <?php 
              while($row=$result->fetch_assoc())
          {
            $web = strtolower($row['jenis']);
            ?>
            <li class="has-sub"><a href="<?= $web?>.php"><span><?= $row['jenis']?></span></a></li>
            <?php
          } ?>
           
           <li class="has-sub"><a href="reptil.php"><span>Reptil</span></a></li>
               <li class="has-sub"><a href="makanan.php"><span>Makanan Hewan</span></a></li>
               <li class="has-sub"><a href="aksesoris.php"><span>Aksesoris Hewan</span></a></li>
               <li class="has-sub"><a href="suplemen.php"><span>Suplemen</span></a></li>
               <li class="has-sub"><a href="grooming.php"><span>Jasa Grooming</span></a></li>
               
            </ul>
    
         </li>
         <li class="has-sub"><a href="carabelanja.php"><span>Cara Belanja</span></a></li>
         <li class="has-sub"><a href="about.php"><span>Tentang Kami</span></a></li>
         <li class="has-sub"><a href="kontak.php"><span>Kontak Kami</span></a></li>
         <?php
            if(!isset($_SESSION['idcust']))
            {
              echo '<li class="has-sub"><a href="regis.php"><span>Register</span></a></li>';
              echo '<li ><a href="login.php"><span>Login</span></a></li>';
        
            }
         
            else
            {
              echo'<li class="active"><a href="cart.php"><span>Keranjang Belanja</span></a></li>';
              echo'<li class="last"><a href="logout.php" onclick="logout()"><span>Logout</span></a></li>';
        
            }


         ?>
      </ul>
    </div>
    </div>                                                                                          
   </div>                                                                                             
</div>                                                                                                
 <div class="main">
  <div class="top-box" style="height:900px">
    <div class="wrap">
     <div class="content-top">
       <form>
          <?php
            require 'connect_db.php';
            $id = $_SESSION['idcust'];
            $sql = "SELECT nama, alamat, telepon FROM customer where id_customer=$id";
            $result=mysqli_query($mysql,$sql);
            while($row=$result->fetch_assoc())
            {
          ?>
          <div class="to" style="margin-left:20px">
            <h2> Alamat Penerima </h2>
            <input type="hidden" value="<?= $id ?>" id="id">
            <label>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label id="nama"><?= $row['nama']?></label><br>
            <label>Alamat Lengkap &nbsp;&nbsp;&nbsp;:</label><label id="alamat"><?= $row['alamat']?></label><br>
            <label>No. Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label id="telp"><?= $row['telepon']?></label>
          
          <?php } ?>
          </div><br>
        </form>
          <input class="w3-button w3-green" style="margin-left:20px"  id='alamat' value='Lanjut ke Pembayaran' onclick="adrs(document.getElementById('id').value)">
          <br/><br/><br/>
          
      </div>
    </div>
  </div>
 </div>
  <div class="footer">
  <div class="wrap">
     <div class="copy">
      <p> © 2013 All rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
    </div>
    <ul class="follow_icon">
       <li><a href="#" style="opacity: 1;"><img src="web/images/fb.png" alt=""></a></li>
       <li><a href="#" style="opacity: 1;"><img src="web/images/tw.png" alt=""></a></li>
       <li><a href="#" style="opacity: 1;"><img src="web/images/rss.png" alt=""></a></li>
       <li><a href="#" style="opacity: 1;"><img src="web/images/g+.png" alt=""></a></li>
    </ul>
    <div class="clear"></div> 
    </div>
  <div class="footer-bot">
    <a href="#toTop" class="toTop">&uarr;</a>
      <script type="text/javascript">
        $('.toTop ').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 600);
          return false;
        });
        $('.toBottom').click(function(){
          $('html,body').animate({scrollTop: $(document).height()}, 600);
          return false;
        });
      </script>
  </div>
  <div class="clear"></div>
  </div>

  
</body>
</html>
<!-- <button class="w3-button w3-green" style="margin-left:20px" onclick="document.getElementById('address').style.display='block'">Ke alamat lain</button>
          <div id="address" style="display:none">
                <div class="w3-container" id="contentaddress" style="height:100px">
                    
                    <br><h2> Alamat Penerima </h2>
                    <div class="to">
                      <input type="text" class="text" value="Nama Lengkap" onfocus="this.value = '';">
                      <br><br><br>
                      <input type="text" class="text" value="Alamat Lengkap (RT/RW)" onfocus="this.value = '';" style="margin-left:-515px">
                      <br><br><br>
                      <input type="text" class="text" value="No. Telepon" onfocus="this.value = '';">
                    </div>
                    <br><br><br><br>
                    <div>
                        
                        <form action='adrs.php'><input class="w3-button w3-green" style="margin-left:1px" type='submit' id='alamat' value='Lanjut ke Pembayaran'></form>
                    </div>
                
                  </div>
          </div> -->
      
      
            