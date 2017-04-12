<div id="cssmenu">
		<?php
		session_start();
		//echo $_SESSION['idcust'];
		require 'connect_db.php';
		$sql= "SELECT distinct jenis FROM jenishewan where jenis != 'ular'";
		$result = mysqli_query($mysql,$sql);
		$a=1;
		?>
			 <ul>
			   <li class="active"><a href="index.php"><span>Home</span></a></li>
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
			   <li><a href="carabelanja.php"><span>Cara Belanja</span></a></li>
			   <li><a href="carapembayaran.php"><span>Cara Pembayaran</span></a></li>
			   <li><a href="about.php"><span>Tentang Kami</span></a></li>
			   <?php
			   		if(!isset($_SESSION['idcust']))
			   		{
			   			echo '<li><a href="regis.php"><span>Register</span></a></li>';
			   			echo '<li><a href="login.php"><span>Login</span></a></li>';
			  
			   		}
			   
			   		else/*if(isset($_SESSION['idcust']))*/
			   		{
			   			echo'<li class="last"><a href="cart.php"><span>Keranjang Belanja</span></a></li>';
			    		echo'<li><a href="logout.php" onclick="logout()"><span>Logout</span></a></li>';
			  
			   		}


			   ?>
			   		<!-- <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-app.js"></script>
                    <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase-auth.js"></script> -->
                    <script>
                     
                      /*var config = {
                        apiKey: "AIzaSyCYC_tC_eBIdVfKlu4XKrfWn_FV82LFlrw",
                        authDomain: "petcart-5f108.firebaseapp.com",
                        databaseURL: "https://petcart-5f108.firebaseio.com",
                        storageBucket: "petcart-5f108.appspot.com",
                        messagingSenderId: "230702348013"
                      };
                      firebase.initializeApp(config);
			   			
			   			function logout(){
			   	
						   	firebase.auth().signOut().then(function() {
							  document.location = "index.php";
							  
							  
							}, function(error) {
							
							    var errorCode = error.code;
  								var errorMessage = error.message;
  								alert(errorMessage);
							});
					   }*/
					</script>
			   
			</ul>
		</div>