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
              echo '<li class="active"><a href="regis.php"><span>Register</span></a></li>';
              echo '<li class="has-sub"><a href="login.php"><span>Login</span></a></li>';
        
            }
         
            else
            {
              echo'<li class="has-sub"><a href="cart.php"><span>Keranjang Belanja</span></a></li>';
              echo'<li class="last"><a href="logout.php" onclick="logout()"><span>Logout</span></a></li>';
        
            }


         ?>
      </ul>
    </div>
    <div class="clear"></div>                                                                     
    </div>                                                                                          
   </div>                                                                                             
</div>                                                                                      
    
<div id="id01" class="w3-modal" style="display:none;">
    <div class="w3-modal-content w3-card-8" style="width:400px">
      <header class="w3-container w3-green"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2>Abbycan Petshop</h2>
      </header>
      <div class="w3-container">
        <br><br>
        <h3 id="index">Password kurang dari 8 karakter</h3>
        <br><br>
        
      </div>
      
    </div>
  </div>                                                                                                
 <div class="main">
  <div class="top-box">
    <div class="wrap">
     <div class="content-top">
       <div class="about-grids">
                <div class="service-content">
                      <form method="POST" id="regis" action="insert-regis.php">
                        <div class="to">
                        <label for="usr">Nama Lengkap :</label><br>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <br><br><br><br>
                        <label for="usr">Alamat :</label><br>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                      </div>
                      <div class="to">
                        <br><br><br><br>
                        <label for="usr">Telepon :</label><br>
                        <input type="text" class="form-control" id="telp" name="telp">
                      </div>
                      <div class="to">
                        <br><br><br><br>
                        <label for="usr">Email :</label><br>
                        <input type="text" class="form-control" id="email" name="email">
                        <br><br><br><br>
                        <label for="usr">Password :</label> *Minimal 8 Karakter<br>
                        <input type="password" class="form-control" id="pass" name="pass">
                      </div>
                      <br><br><br><br>
                      <input type="submit" class="btn btn-info" style="margin-left:0px" value="REGISTER" id="regis" onclick="create(document.getElementById('email').value,document.getElementById('pass').value);return false;">
                      </form>
                      
                    
                </div>
        
            <div class="services-sidebar">
              
               <div class="service-box"> </div>
               
            </div>
            <div class="clear"> </div>
               </div>
               </div>
    </div>
  </div>
</div>

              <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase-app.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase-auth.js"></script>
                     <script>
                      
                      function create(uemail,upass){
                        var passs = document.getElementById("pass").value;
                        var emails = document.getElementById("email").value;
                        var nama = document.getElementById("nama").value;
                        var alamat = document.getElementById("alamat").value;
                        var telpon = document.getElementById("telp").value;
                        if (passs.length<8) {
                        
                        document.getElementById('id01').style.display='block';
                        return false;
                        } 
                        else{
                          
                          document.getElementById('regis').action="insert-regis.php";
                        document.getElementById('regis').submit();
                        
                        }
                      }

                    </script>

</body>

</html>