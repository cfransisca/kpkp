<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
			   <li class="has-sub"><a href="carabelanja.php"><span>Cara Belanja</span></a></li>
			   <li class="active"><a href="about.php"><span>Tentang Kami</span></a></li>
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
	  </div>                                                                                          
   </div>                                                                                             
</div>                                                                                                
 <div class="main">
 	<div class="top-box">
	  <div class="wrap">
		 <div class="content-top">
			  <div class="about-grids">
					<div class="about-grid">
						<h3>About Naturex</h3>
						<a href="#"><img src="web/images/banner1.jpg" title="about"></a>
						<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</span>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit.</p>
						<a class="button1" href="#">Read More</a>
					</div>
					<div class="about-grid center-grid1">
						<h3>WHY CHOOSE US?</h3>
						<p>Pellenn dimentum sed, commodo vitae, ornare sit amet,lit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>
						<label>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet</label>
						<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetrornare sit amet, wisi. Aenean</p>
						<label>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet</label>
						<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetrornare sit amet, wisi. Aenean</p>
					</div>
					<div class="about-grid last-grid1">
						<h3>Our Clients</h3>
						<div class="about-team">
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="web/images/pic9.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="web/images/pic10.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="web/images/pic11.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="web/images/pic12.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
								</div>
								<div class="clear"> </div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
			</div><br>
		</div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<h5 class="head">Produk Terbaru</h5>
		       <div class="middle-top">
				<div class="col_1_of_3 span_1_of_3">
					<div class="dc-head">
						<div class="dc-head-img">
							<a href="reptil.html"><img src="web/images/reptil/VaranusSalvator.jpg" width="" height="150" title="dc-name"></a>
						</div>
						<div class="dc-head-info">
							<h3>Reptil</h3>
							<span>Varanus Salvator</span>
						</div>
						<div class="clear"> </div>
						<div class="dc-profile">
							<p>Reptil Varanus Salvator, harga Rp. 250.000. Barang baru datang.</p>
							<a href="reptil.html"><button class="btn btn-6 btn-6a">Selengkapnya</button></a>
						</div>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="dc-head">
						<div class="dc-head-img">
							<a href="burung.html"><img src="web/images/burung/burung1.jpg" width="" height="150" title="dc-name"></a>
						</div>
						<div class="dc-head-info">
							<h3>Burung</h3>
							<span>Burung Love Bird Green</span>
						</div>
						<div class="clear"> </div>
						<div class="dc-profile">
							<p>Burung Love Bird Green, harga Rp. 2.000.000. Barang baru datang</p>
							<a href="burung.html"><button class="btn btn-6 btn-6a">Selengkapnya</button></a>
						</div>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="dc-head">
						<div class="dc-head-img">
							<a href="#"><img src="web/images/reptil/ularRedBoiga.jpg" width="" height="150" title="dc-name"></a>
						</div>
						<div class="dc-head-info">
							<h3>Reptil</h3>
							<span>Ular Red Boiga</span>
						</div>
						<div class="clear"> </div>
						<div class="dc-profile">
							<p>Reptil Ular Red Boiga, Rp. 870.000. Barang baru datang.</p>
							<a href="reptil.html"><button class="btn btn-6 btn-6a">Selengkapnya</button></a>
						</div>
					</div>
				</div>
				<div class="clear"></div> 
		   </div>
		</div>
	</div>
	<div class="top-box">
	  <div class="wrap">
		 <div class="content-top">
			<div class="middle-top">
				<h5 class="head">Our Gallery</h5>
				<div class="gallery">
					<ul>
						<li><a href="web/images/reptil/kadal2.jpg" class="magnifier"><img src="web/images/reptil/kadal2.jpg" width="" height="230" alt=""><span></span></a>
							<div class="dc-head1">
								<h3>Reptil</h3>
								<span>Bearded Dragon Baby CB</span>
						   </div></li>
						<li><a href="web/images/reptil/kuraSulcata.jpg" class="magnifier"><img src="web/images/reptil/kuraSulcata.jpg" width="" height="230" alt=""><span></span></a> 
							<div class="dc-head1">
								<h3>Reptil</h3>
								<span>Kura-kura Sulcata</span>
						    </div></li>
						    <br><br><br>
						<li class="last"><a href="web/images/burung/burung4.jpg" class="magnifier"><img src="web/images/burung/burung4.jpg" width="" height="230" alt=""><span></span></a>
							<div class="dc-head1">
								<h3>Perspiciatis</h3>
								<span>totam rem aperiam</span>
						    </div></li>
						<div class="clear"> </div>
					</ul><br>
				</div>
				<div class="clear"></div> 
		   </div>
		</div>
	  </div>
	</div>
    </div>
	<div class="footer-box">
	    <div class="wrap">
	     	<h4 class="f-head">
				Lorem ipsum dolor
			</h4>	
	        <div id="slideshow">
			 	<div class="f-desc1">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
				</div>
				<div class="f-desc1">
			 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
				</div>
		    </div>
		<script>
			$("#slideshow > div:gt(0)").hide();
			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(00)
			    .next()
			    .fadeIn(500)
			    .end()
			    .appendTo('#slideshow');
			},  2000);
		</script>
	  </div>
	</div>
	<div class="footer">
	   <div class="wrap">
		 <div class="copy">
			<p> © 2013 All rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
		</div>
		<ul class="follow_icon">
		   <li><a href="#" style="opacity: 1;"><img src="web/images/fb.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="web/images/tw.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="web/images/rss.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="web/images/g+.png" alt=""></a></li>
		</ul>
		<div class="clear"></div> 
	</div>
	<div class="footer-bot">
 		<a href="#toTop" class="toTop">&uarr;</a>
			<script type="text/javascript">
				$('.toTop ').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 600);
					return false;
				});
				$('.toBottom').click(function(){
					$('html,body').animate({scrollTop: $(document).height()}, 600);
					return false;
				});
			</script>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>

    	
    	
            