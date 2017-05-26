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
              echo '<li class="has-sub"><a href="regis.php"><span>Register</span></a></li>';
              echo '<li class="active"><a href="login.php"><span>Login</span></a></li>';
        
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
 <div class="main">
  <div class="top-box">
    <div class="wrap">
     <div class="content-top">
       <div class="about-grids">
                <div class="service-content">
                  	
                    <form method="post" id="flogin">
                      <div class="to">
                        <label for="usr">Email :</label><br>
                        <input type="text" class="form-control" id="email" name="email">

                      </div><br><br><br><br>
                      <div class="to">
                          <label for="usr">Password :</label><br>
                          <input type="password" class="form-control" id="password" name="pass">
                      </div><br><br><br><br>
                      <!-- <div class="pass-container"></div> <div class="pass-bar"></div>
                      <br> <div class="pass-hint"></div> -->
                      <button class="btn btn-info"  style="margin-left:0px" value="LOGIN" id="login" onclick="check(document.getElementById('email').value,document.getElementById('password').value)">Submit</button>
                      </form>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-app.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-auth.js"></script>
                     <script>
                      
                      /*var config = {
                        apiKey: "AIzaSyCYC_tC_eBIdVfKlu4XKrfWn_FV82LFlrw",
                        authDomain: "petcart-5f108.firebaseapp.com",
                        databaseURL: "https://petcart-5f108.firebaseio.com",
                        storageBucket: "petcart-5f108.appspot.com",
                        messagingSenderId: "230702348013"
                      };
                      firebase.initializeApp(config);*/

                      function check(uemail,upass){

                        /*console.log("email", uemail);
                        console.log("pass", upass);
                        firebase.auth().onAuthStateChanged(function(user) {
                          if (user) {
                            
                            console.log(user);
                          } else {
                            firebase.auth().signInWithEmailAndPassword(uemail, upass).catch(function(error) {
                      

                            var errorCode = error.code;
                            var errorMessage = error.message;
                            console.log(errorCode);
                            
                            });
                        window.location.replace("index.php");
                            
                          }
                        });*/
                        document.getElementById('flogin').action="sel-login.php";
                        document.getElementById('flogin').submit();
                        //header('Location: http://localhost/kp/kpkp/index.php');
                        //ob_flush_end;
                      }
                      
                    </script>

                    </div>
        
            <div class="services-sidebar">
              <!-- <h3>WE PROVIDE</h3>
               <ul>
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Conse ctetur adipisicing</a></li>
                  <li><a href="#">Elit sed do eiusmod tempor</a></li>
                  <li><a href="#">Incididunt ut labore</a></li>
                  <li><a href="#">Et dolore magna aliqua</a></li>
                  <li><a href="#">Ut enim ad minim veniam</a></li>
               </ul> -->
               <div class="service-box"> </div>
               <!-- <h3>ARCHIVES</h3>
               <ul>
                <li><a href="#">JAN, 2013</a></li>
                <li><a href="#">FEB, 2013</a></li>
                <li><a href="#">MAR, 2013</a></li>
                <li><a href="#">APRIL, 2013</a></li>
               </ul> -->
            </div>
            <div class="clear"> </div>
          </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>