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
 <div class="main">
  <div class="top-box">
    <div class="wrap">
     <div class="content-top">
       <div class="about-grids">
                <div class="service-content">
                  	<div class="form-group">
                        <label for="usr">Email :</label><br>
                        <input type="text" class="form-control" id="email">

                      </div><br>
                      <div class="form-group">
                          <label for="usr">Password :</label><br>
                          <input type="text" class="form-control" id="password">
                          

                      
                      </div><br>
                      <div class="pass-container"></div> <div class="pass-bar"></div>
                      <br> <div class="pass-hint"></div>
                      <button class="btn btn-info" value="LOGIN" id="login" onclick="check(document.getElementById('email').value,document.getElementById('password').value)">Submit</button>

                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-app.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-auth.js"></script>
                     <script>
                      
                      var config = {
                        apiKey: "AIzaSyCYC_tC_eBIdVfKlu4XKrfWn_FV82LFlrw",
                        authDomain: "petcart-5f108.firebaseapp.com",
                        databaseURL: "https://petcart-5f108.firebaseio.com",
                        storageBucket: "petcart-5f108.appspot.com",
                        messagingSenderId: "230702348013"
                      };
                      firebase.initializeApp(config);

                      function check(uemail,upass){

                        console.log("email", uemail);
                        console.log("pass", upass);
                        firebase.auth().onAuthStateChanged(function(user) {
                          if (user) {
                            // User is signed in.
                            console.log(user);
                          } else {
                            firebase.auth().signInWithEmailAndPassword(uemail, upass).catch(function(error) {
                      

                            var errorCode = error.code;
                            var errorMessage = error.message;
                            console.log(errorCode);
                            
                            });
                        window.location.replace("index.php");
                            // No user is signed in.
                          }
                        });
                        
                        //header('Location: http://localhost/kp/kpkp/index.php');
                        //ob_flush_end;
                      }
                      
                    </script>

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

</body>

</html>