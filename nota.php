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
        <a href="index.html"><img src="web/images/logo.png" alt=""/></a>                                             
      </div>                                                                                    
      <div class="phone">                                                                       
        <span class="order">order online:</span><br>                                          
        <h5 class="ph-no">085745555881</h5>                                             
      </div>                                                                                    
      <div class="clear"></div>                                                                 
      </div>                                                                                        
  </div>                                                                                            
  <div class="header-bottom">                                                                       
    <div class="wrap">                                                                            
    <?php include "menu.php";?>                                                                     
    </div>                                                                                          
   </div>                                                                                             
</div>                                                                                                
 <div class="main">
  <div class="top-box" style="height:900px">
    <div class="wrap">
     <div class="content-top">
          
          
          <?php
            require 'connect_db.php';
            $id = $_SESSION['idcust'];            
            $sql = "SELECT customer.nama,customer.alamat,customer.telepon,nota.id_nota,DATE_FORMAT(nota.tanggal,'%d/%m/%Y') AS niceDate FROM nota INNER JOIN customer on nota.id_customer=customer.id_customer where customer.id_customer=$id Order by id_nota desc limit 1";
            $result=mysqli_query($mysql,$sql);
            while($row=$result->fetch_assoc())
            { ?>
          <div class="to" style="margin-left:20px">
            <h2> Nota Penjualan </h2>
            <label>No. Nota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> <?= $row['id_nota']?> </label><br>
            <label>Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label id="tgl"> <?= $row['niceDate']?></label><br>
            <h3> Pembeli </h3>
            <label>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label><?= $row['nama']?></label><br>
            <label>Alamat Lengkap &nbsp;&nbsp;&nbsp;:</label><label><?= $row['alamat']?></label><br>
            <label>No. Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label><?= $row['telepon']?></label><br>
          <?php
            echo "Nama Item &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:";
            foreach ($_SESSION['nama'] as $key=>$value1){echo "{$value1},&nbsp;";}
            echo "<br>";
          } ?>
          <label>Total Bayar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label>Rp. <?= $_SESSION['total']?></label><br><br>
          </div>
          <h3>Anda akan menerima pesanan Anda dalam 4-10 hari, setelah Anda melakukan pembayaran.</h3><br>
          <div style="background-color:lightblue;width:1200px">
            Terimakasih telah berbelanja di Abbycan Petshop.<br>
            Mohon melakukan pembayaran melalui internet/mobile banking atau melalui ATM.<br>
            Konfirmasi pembayaran Anda ke No. Telepon 085745555881 (sms) dalam jangka waktu kurang dari 24 jam.<br>
            Jika tidak pesanan Anda akan dibatalkan.
          </div>
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