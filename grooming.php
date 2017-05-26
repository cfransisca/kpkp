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
				      		$sql="SELECT * FROM Jasa";
				      		$result = mysqli_query($mysql,$sql);
				      		while($row=$result->fetch_assoc())
							{
								/*$number = number_format($row['harga']);*/
								?>
								<div class="to">
		                        <div><h4>Jasa : <b id="nama"><?= $row['nama_jasa']?></b></h4></div>
		                        </div>
		                        <div class="to">
		                        <div><h4>Harga : Rp. <b id="harga"><?= $row['harga']?></b></h4></div>
			                    </div>
			                    <div class="to"> 
			                    <div id="ket" value="<?= $row['keterangan']?>"><h4>Keterangan : <?= $row['keterangan']?></h4></div>
			                    </div>
			                    <h4>Jumlah : <input type='number' style='width:60px' value='1' id='quantity' class='form-control cart-quantity m-b-10px cart-quantity-dropdown' min='1' /></h4>
			                    <br>
			                    <button id="cart" name="add" style="background:url(http://www.petshopgrosir.com/templates/frontend/psg/images/beli_button.png) no-repeat; border:none; width:131px; height:32px;" onclick="addJasa(document.getElementById('nama').textContent,document.getElementById('harga').textContent,document.getElementById('quantity').value)"></button>
			                      
		                      
						      	</div>
								<?php
							}
				      	?>
				      	
                        

				      	<div class="services-sidebar">
							
					 		 <div class="service-box"> </div>
					 		 
						</div>
						<div class="clear"> </div>
			         </div>
			         </div>
			         </div>
			         </div>
			         </div>