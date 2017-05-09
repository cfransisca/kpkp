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
<?php
    require 'connect_db.php';
?>
<body>
<div class="header">                                                                                  
	<div class="wrap">                                                                                
	   <div class="header-top">	                                                                      
	        <div class="logo">                                                                        
				<a href="index.html"><img src="images/logo.png" alt=""/></a>                                             
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
				      		<?php
        						$sql= "select hewan.id_hewan, hewan.warna,hewan.nama,hewan.harga,hewan.foto, jenishewan.jenis, jenishewan.ras
       									from hewan INNER join jenishewan on hewan.id_jenis = jenishewan.id_jenis
       									where hewan.id_nota is null && jenishewan.jenis = 'Anjing'";
        						$result = mysqli_query($mysql,$sql);
								
        						while($row=$result->fetch_assoc())
								{
									?>
									
									<div class="section group">
									<div class="col_1_of_3 span_1_of_3">
	                        		<div class="product-item">
										
            							<div class="img">
            								<img src="images/anjing/<?= $row['foto']?>" width="180" height="230"/>
            							</div>
            								<h4>A<?= $row['id_hewan']?></h4>
            								
           									<div class="desc-product"><?= $row['jenis']?>&nbsp;<?= $row['ras']?>&nbsp;<?= $row['warna']?></div>
           									
           									<div class="price">Rp. <?= $row['harga']?></div>
										
										<a href="detail.php?show=<?= urlencode(base64_encode($row['id_hewan']))?>" class="w3-text-teal">
											<h4> Detail Hewan</h4>      								
           								</a>
           									<br>
											<button id="cart" name="add" value="A<?= $row['id_hewan']?>" style="background:url(http://www.petshopgrosir.com/templates/frontend/psg/images/beli_button.png) no-repeat; border:none; width:131px; height:32px;" onclick="additemCart(this.value)"></button>
           									<br><br><br>
           									</div>
                					</div>
                					</div>
                					<!-- </form> -->

									<?php
									
								}
        						?>
								
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

	