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
		//echo $_SESSION['idcust'];
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
        						$sql= "SELECT id_perlengkapan,ukuran,stok,warna,harga,jenis,Gambar FROM perlengkapan where jenis='suplemen'";
        						$result = mysqli_query($mysql,$sql);
								
        						while($row=$result->fetch_assoc())
								{
									?>
									
									<div class="section group">
									<div class="col_1_of_3 span_1_of_3">
	                        		<div class="product-item">
	                        			
            							<div class="img">
            								<img src="images/suplemen/<?= $row['Gambar']?>" width="180" height="230"/>
            							</div>
            								<h4>S<?= $row['id_perlengkapan']?></h4>
            								
           									<div class="desc-product"><?= $row['jenis']?>&nbsp;<?= $row['warna']?></div>
           									
           									<div class="price">Rp. <?= $row['harga']?></div>
										<a href="detail-suplemen.php?show=<?= urlencode(base64_encode($row['id_perlengkapan']))?>&&prlgkpn=suplemen" class="w3-text-teal">
											
											<h4> Detail Hewan</h4>
										</a>  								
           									<br>
           									<button id="cart" name="add" value="S<?= $row['id_hewan']?>" style="background:url(http://www.petshopgrosir.com/templates/frontend/psg/images/beli_button.png) no-repeat; border:none; width:131px; height:32px;" onclick="additemCart(this.value)"></button>
											
           									<br><br><br>
           									</div>
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
			         
			        <div id="cartmod" class="w3-modal">
					  <div class="w3-modal-content" style="margin-top:120px">

					    <header class="w3-container w3-teal">
					      <span onclick="document.getElementById('cartmod').style.display='none'"
					      class="w3-button w3-display-topright">&times;</span>
					      <h2>Keranjang Belanja</h2>
					    </header>
					    	<div class="w3-container" id="contentmodal" style="height:100px">
							    	
							    </div>
					  </div>
					</div>
			     </body>
			     </html>