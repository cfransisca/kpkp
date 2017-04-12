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
        						$sql= "select hewan.id_hewan, hewan.warna,hewan.nama,hewan.harga,hewan.foto, jenishewan.jenis, jenishewan.ras
       									from hewan INNER join jenishewan on hewan.id_jenis = jenishewan.id_jenis
       									where hewan.id_nota is null && jenishewan.jenis = 'Kucing'";
        						$result = mysqli_query($mysql,$sql);
								
        						while($row=$result->fetch_assoc())
								{
									?>
									
									<div class="section group">
									<div class="col_1_of_3 span_1_of_3">
	                        		<div class="product-item">
	                        			<a href="detail.php?show=<?= $row['id_hewan']?>">
            							<div class="img">
            								<img src="images/kucing/<?= $row['foto']?>" width="180" height="230"/>
            							</div>
            								<h4>K<?= $row['id_hewan']?></h4>
            								
           									<div class="desc-product"><?= $row['jenis']?>&nbsp;<?= $row['ras']?>&nbsp;<?= $row['warna']?></div>
           									
           									<div class="price">Rp. <?= $row['harga']?></div>
										</a>           								
           									<br>

											
											<button name="add" value="KC<?= $row['id_hewan']?>" style="background:url(http://www.petshopgrosir.com/templates/frontend/psg/images/beli_button.png) no-repeat; border:none; width:131px; height:32px;" onclick="additemCart(this.value)"></button>		
           									<br><br><br>
           									</div>
                					</div>
                					</div>

									<?php
									$_SESSION['show'] = $row['id_hewan'];
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
			         <script>
			         	function myFunct(kode){
			         		//var item = document.getElementById('add').value;
			         		console.log(kode);
			         	}
			         	
			         	
					    $('.add').click(function(){
					    	var item = document.getElementById('add').value;
					    	console.log(item);
					    	/*$.ajax({
					    		type: "POST",
					    		url: "functions.php",
					    		data: {name: item}
					    	}).done(function(){
					    		alert("berhasil");
					    	});*/
					    	//callFunction();
					    });

					    /*function callFunction(){
					    	jQuery.ajax({
					    		type: "POST",
					    		url: "functions.php",
					    		data: {functionname: 'addtocart', arguments:[$(".add").val()]},
					    		success:function(data){
					    			alert(data);
					    			console.log(data);
					    		}
					    	});
					    }*/
					    
					 </script>
					 <?php //echo implode(" ", $_SESSION['item']);?>
			     </body>
			     </html>