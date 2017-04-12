<html>
<head>
  <title>Free 4Pets Website Template | Services :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'> 
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>  
<!--light-box-->
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
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
        <a href="index.php"><img src="images/logo.png" alt=""/></a>                                             
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
    <!-- menu -->
    <?php include 'menu.php'; ?>                                                                                      
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
                        <div class="form-group">
                        <label for="usr">Nama Lengkap :</label><br>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div><br>
                      <div class="form-group">
                        <label for="usr">Alamat :</label><br>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                      </div><br>
                      <div class="form-group">
                        <label for="usr">Telepon :</label><br>
                        <input type="text" class="form-control" id="telp" name="telp">
                      </div><br>
                      <div class="form-group">
                        <label for="usr">Email :</label><br>
                        <input type="text" class="form-control" id="email" name="email">
                      </div><br>
                      <div class="form-group">
                          <label for="usr">Password :</label> *Minimal 8 Karakter<br>
                          <input type="text" class="form-control" id="pass" name="pass">
                      </div><br>
                      <!-- <input type="submit" class="btn btn-info" value="REGISTER" id="regiss"> -->
                      <input type="submit" class="btn btn-info" value="REGISTER" id="regis" onclick="create(document.getElementById('email').value,document.getElementById('pass').value);return false;">
                      </form>
                      
                    
                </div>
        
            <div class="services-sidebar">
              <h3>WE PROVIDE</h3>
               <ul>
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Conse ctetur adipisicing</a></li>
                  <li><a href="#">Elit sed do eiusmod tempor</a></li>
                  <li><a href="#">Incididunt ut labore</a></li>
                  <li><a href="#">Et dolore magna aliqua</a></li>
                  <li><a href="#">Ut enim ad minim veniam</a></li>
               </ul>
               <div class="service-box"> </div>
               <h3>ARCHIVES</h3>
               <ul>
                <li><a href="#">JAN, 2013</a></li>
                <li><a href="#">FEB, 2013</a></li>
                <li><a href="#">MAR, 2013</a></li>
                <li><a href="#">APRIL, 2013</a></li>
               </ul>
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
                      // Initialize Firebase

                      /*var config = {
                        apiKey: "AIzaSyCYC_tC_eBIdVfKlu4XKrfWn_FV82LFlrw",
                        authDomain: "petcart-5f108.firebaseapp.com",
                        databaseURL: "https://petcart-5f108.firebaseio.com",
                        storageBucket: "petcart-5f108.appspot.com",
                        messagingSenderId: "230702348013"
                      };
                      firebase.initializeApp(config);*/

                      function create(uemail,upass){
                        var passs = document.getElementById("pass").value;
                        var emails = document.getElementById("email").value;
                        var nama = document.getElementById("nama").value;
                        var alamat = document.getElementById("alamat").value;
                        var telpon = document.getElementById("telp").value;
                        if (passs.length<8) {
                        //alert('BAAAAAA');
                        document.getElementById('id01').style.display='block';
                        return false;
                        } 
                        else{
                          /*console.log("email", uemail);
                        console.log("pass", upass);
                        firebase.auth().createUserWithEmailAndPassword(uemail, upass).catch(function(error) {
                          
                          var errorCode = error.code;
                          var errorMessage = error.message;
                          alert(errorMessage);*/
                          // ...
                          document.getElementById('regis').action="insert-regis.php";
                        document.getElementById('regis').submit();
                        
                        

                        }

                        
                      
                      }

                    </script>

</body>

</html>