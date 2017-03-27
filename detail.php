<?php
	session_start();
    require 'connect_db.php';
?>

<!DOCTYPE HTML>
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
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
								<?php
	
								//$id = $_SESSION['show'];
								$id = $_GET['show'];
								$decrypt = urlencode(base64_decode($id));
								//$sql = "select * from hewan where id_hewan=$id";
								$sql = "select hewan.warna,hewan.nama,hewan.harga,hewan.foto, hewan.panjang, hewan.tinggi, hewan.berat,jenishewan.ras
       									from hewan INNER join jenishewan on hewan.id_jenis = jenishewan.id_jenis
       									where id_hewan=$decrypt";	
								$result = mysqli_query($mysql,$sql);
								
								while($row=$result->fetch_assoc())
								{ 
								$number = number_format($row['harga']);
?>
									<div class="w3-row">
									  <div class="w3-container w3-third">
										<img src="images/kucing/<?= $row['foto']?>" width="180" height="230"/> 
									  </div>
									  <div class="w3-twothird w3-container">
										<h5>Nama : <?= $row['nama']?></h4>
										<h5>Ras : <?= $row['ras']?></h4>
										<h5>Warna : <?= $row['warna']?></h4>
										<h5>Panjang : <?= $row['panjang']?> cm</h4>
										<h5>Tinggi : <?= $row['tinggi']?> cm</h4>
										<h5>Berat : <?= $row['berat']?> kg</h4>
										<h4 style="font-weight:bold">Harga : Rp. <?= $number?></h4>
										<button onclick="$('#add-to-cart-1212').submit(); this.blur(); return false;" style="background:url(http://www.petshopgrosir.com/templates/frontend/psg/images/beli_button.png) no-repeat; border:none; width:131px; height:32px;">&nbsp;</button>
									  </div>
									</div>
									
									
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