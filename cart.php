<!DOCTYPE HTML>
<html>
<head>
<?php
include 'head.php';
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
    <!-- menu -->
    <div id="cssmenu" style="width:1250px">
    <?php
    session_start();
    
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
              echo '<li class="has-sub"><a href="login.php"><span>Login</span></a></li>';
        
            }
         
            else
            {
              echo'<li class="active"><a href="cart.php"><span>Keranjang Belanja</span></a></li>';
              echo'<li class="last"><a href="logout.php" onclick="logout()"><span>Logout</span></a></li>';
        
            }


         ?>
      </ul>
    </div>                                                                                     
    <div class="clear"></div>                                                                     
    </div>                                                                                          
   </div>                                                                                             
</div>
<div class="main">
  <div class="top-box">
    <div class="wrap">
     <div class="content-top">
       <div class="about-grids">
          <div class="service-content" style="height:300px">
<?php
if(!isset($_SESSION['total'])){
  echo "<br><br><br><br>";
  echo "<div  style='margin-left:60px; width:1000px'>";

    echo "<center><h4>Anda belum memilih produk belanjaan.</h4>";
    echo "<h4>Silahkan beli barang yang anda inginkan di menu produk.</h4>";
    echo "<h4>Selamat berbelanja.</h4></center>";
    echo "</div>";
}
else{
  $total = $_SESSION['total'];
echo "<div style='margin-top:50px;margin-bottom:20px;height:40px'>";
echo "<div class='w3-third w3-container' style='width:200px'>";
echo "NAMA ITEM <br><br>";
foreach ($_SESSION['nama'] as $key=>$value1){echo "{$value1} <br>";}
echo "</div>";

echo "<div class='w3-third w3-container' style='width:150px'>";
echo "HARGA <br><br>";
foreach ($_SESSION['harga'] as $key=>$value2){echo "{$value2} <br>";}
echo "</div>";

echo "<div class='w3-third w3-container' style='width:150px'>";
echo "QUANTITY <br><br>";
foreach ($_SESSION['quan'] as $key=>$value3){echo "{$value3} <br>";}
echo "</div>";

echo "SUBTOTAL <br><br>";
foreach ($_SESSION['sub'] as $key=>$value4){echo "{$value4} <br>";}
echo "</div>";
echo "<br><br><br>";
echo "<hr style='width:600px''>";
echo "<div style='margin-left:400px'>TOTAL : $total</div>";
echo "</div>";
echo "<form action='validasi.php'> <input type='submit' id='bayar' value='Konfirmasi Pembelian' style='margin-left:420px'></button></form>";
}

?>
</div>
        
            
            <div class="clear"> </div>
               </div>
               </div>
               </div>
               </div>
               </div>
</body>
</html>