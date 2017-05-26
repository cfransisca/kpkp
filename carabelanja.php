<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php include 'head.php';?>
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
			   <li class="active"><a href="carabelanja.php"><span>Cara Belanja</span></a></li>
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
							<p>
								<h1> Cara Belanja </h1>
								<br>
								1.Silahkan memilih produk yang Anda inginkan<br>
								• klik tombol Add to Cart untuk memasukkan produk yang dipilih ke keranjang belanja Anda.<br><br>
								• untuk mengecek keranjang belanja Anda dapat meng klik menu keranjang belanja.<br><br>
								
								2. Di dalam halaman Keranjang Belanja :<br>
								• Tombol Konfirmasi Pembelian : untuk melanjutkan ke halaman validasi alamat pengiriman.<br><br>
								• Tombol Lanjut ke Pembayaran : untuk mendapatkan nota pembelian barang.<br><br>

								3. Halaman Nota<br>
								• Terdapat informasi nomor nota dan tanggal pembelian.<br><br>
								• Terdapat informasi pembeli.<br><br>
								• Terdapat informasi nama produk dan jumlah pembayaran.<br><br>
								• Terdapat informasi langkah-langkah pembayaran<br><br>
								
							</p>
							<p>
								<br>
								<h1> Cara Pembayaran </h1>
								<br>
								• Metode pembayaran yang kami terima: Lewat transfer Bank BCA dan Bank Mandiri<br><br>
								• Setelah melakukan transfer, pembeli wajib memberitahu pihak penjual melalui telepon atau sms bahwa pembeli telah melakukan   pembayaran.<br><br>
								• Pengiriman barang hanya akan diproses setelah kami mendapat pemberitahuan dari pembeli mengenai pembayaran.<br><br>
								• Bila dalam kurun waktu 24 jam penjual tidak menerima konfirmasi pembayaran maka penjual berhak membatalkan pesanan pembeli.<br><br>
								• Kesalahan jumlah transfer yang tidak sesuai dengan produk yang dipesan akan mengakibatkan barang pesanan tidak akan diproses.<br><br>
								• Order dengan pembayaran dan konfirmasi yang diterima sebelum jam 12.00 malam akan diproses pada hari itu juga. Lewat dari itu akan diproses keesokan harinya.<br><br>

							</p>
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
				
</body>
</html>

    	
    	
            