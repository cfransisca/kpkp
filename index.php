<!--esign baytsrapndex
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
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
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
			   <li class="active"><a href="index.php"><span>Home</span></a></li>
			   <li ><a href=""><span>Produk</span></a>
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
	<!------ Slider ------------>
		 <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/banner4.jpg" alt="" />
	                <img src="images/banner3.jpg" alt="" />
	                <img src="images/banner2.jpg" alt="" />
	                <img src="images/banner1.jpg" alt="" />
	                <img src="images/banner5.jpg" alt="" />
	            </div>
	       </div>
         </div>
  <!------End Slider ------------>

 	<div class="main">
 	 <div class="top-box">
	  <div class="wrap">
		 <div class="content-top">
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4">
	                    <div class="box-1">
	                        <img src="images/reptil/kadal.jpg" width="380" height="230" alt="" class="wrapper">
	                        <div class="inside">
	                            <h2 class="v1">Reptil</h2>
	                            <p class="desc">Tree Dragon, harga Rp. 150.000. Stok masih ada.</p>
	                            <a href="reptil.html"><div class="clearfix"><span class="box-btn"></span></div></a>
	                        </div>
	                    </div>
                	</div>
                </div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4">
	                    <div class="box-1">
	                        <img src="images/hamster/hamsterAnggora.jpg" width="380" height="230" alt="" class="wrapper">
	                        <div class="inside">
	                            <h2 class="v1">Hamster</h2>
	                            <p class="desc">Hamster Anggora, Harga Rp. 150.000. Stok masih ada.</p>
	                            <a href="hamster.html"><div class="clearfix"><span class="box-btn"></span></div></a>
	                        </div>
	                    </div>
                	</div>
                </div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="grid_4">
	                    <div class="box-1">
	                        <img src="images/reptil/kuraIndianStar.jpg" width="380" height="230" alt="" class="wrapper">
	                        <div class="inside">
	                            <h2 class="v1">Kura-kura</h2>
	                            <p class="desc">Kura-kura Indian Star, Harga Rp. 1.250.000. Stok masih ada.</p>
	                            <a href="reptil.html"><div class="clearfix"><span class="box-btn"></span></div></a>
	                        </div>
	                    </div>
                	</div>
                </div>
				<div class="clear"></div> 
			</div>
		</div>
	  </div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<h5 class="head">Produk Terbaru</h5>
		       <div class="middle-top">
				<div class="col_1_of_3 span_1_of_3">
					<div class="dc-head">
						<div class="dc-head-img">
							<a href="reptil.html"><img src="images/reptil/VaranusSalvator.jpg" width="" height="150" title="dc-name"></a>
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
							<a href="burung.html"><img src="images/burung/burung1.jpg" width="" height="150" title="dc-name"></a>
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
							<a href="#"><img src="images/reptil/ularRedBoiga.jpg" width="" height="150" title="dc-name"></a>
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
						<li><a href="images/reptil/kadal2.jpg" class="magnifier"><img src="images/reptil/kadal2.jpg" width="" height="230" alt=""><span></span></a>
							<div class="dc-head1">
								<h3>Reptil</h3>
								<span>Bearded Dragon Baby CB</span>
						   </div></li>
						<li><a href="images/reptil/kuraSulcata.jpg" class="magnifier"><img src="images/reptil/kuraSulcata.jpg" width="" height="230" alt=""><span></span></a> 
							<div class="dc-head1">
								<h3>Reptil</h3>
								<span>Kura-kura Sulcata</span>
						    </div></li>
						    <br><br><br>
						<li class="last"><a href="images/burung/burung4.jpg" class="magnifier"><img src="images/burung/burung4.jpg" width="" height="230" alt=""><span></span></a>
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
			<p> © 2017 </a></p>
			
		</div>

		<ul class="follow_icon">
		   <li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
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

    	
    	
            