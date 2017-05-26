<?php
    require 'connect_db.php';
?>

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
			   <li class="active"><a href=""><span>Produk</span></a>
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
								<?php
	
								
								$id = $_GET['show'];
								$jenis = $_GET['pkn'];
								$decrypt = urlencode(base64_decode($id));
								
								$sql = "SELECT tgl_kadaluarsa,harga,berat,stok,merk,kategori_usia,jenis,Gambar FROM pakan where id_pakan=$decrypt";	
								$result = mysqli_query($mysql,$sql);
								
								while($row=$result->fetch_assoc())
								{ 
								$number = number_format($row['harga']);
?>
									<div class="w3-row">
									  <div class="w3-container w3-third">
										<img src="images/<?=$jenis?>/<?= $row['Gambar']?>" width="180" height="230"/> 
									  </div>
									  <div class="w3-twothird w3-container">
										<h4>Merk : <?= $row['merk']?></h4>
										<h4>Jenis : <?= $row['jenis']?></h4>	
										<h4>Berat : <?= $row['berat']?></h4>
										<h4>Usia : <?= $row['kategori_usia']?> keatas</h4>
										<h4>Tanggal Kadaluarsa : <?= $row['tgl_kadaluarsa']?> </h4>
										<h4>Stok : <?= $row['stok']?> cm</h4>
										<h4>Berat : <?= $row['berat']?> kg</h4>
										<h4 style="font-weight:bold">Harga : Rp. <?= $number?></h4>
										
									  </div>
									</div>
									
									
								<?php
								}
								?>
        						
								
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
			     </body>
			     </html>