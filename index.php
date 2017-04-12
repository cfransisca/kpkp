<!--esign baytsrapndex
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
//session_start();
//$_SESSION['idcust']='32';
?>


<!DOCTYPE HTML>
<html>
<head>

<title>Free 4Pets Website Template | Home :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="css/w3.css">
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
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
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="phone">
				
			</div>
			<div class="clear"></div> 
	    </div>
	</div>

	<!-- popup -->

	<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2>Sign Up</h2>
      </header>
      <div class="w3-container">
      	<p></p>
        <input type="text" class="w3-input" placeholder="Nama Lengkap" name="nama">
        <input type="text" class="w3-input" placeholder="Email" name="email">
        <input type="text" class="w3-input" placeholder="Alamat" name="alamat">
        <input type="text" class="w3-input" placeholder="Password" name="pass">
        <input type="text" class="w3-input" placeholder="Ulangi Password" name="repass">
        <p></p>
      </div>
      <footer class="w3-container w3-teal">
        <p></p>
        <p></p>
      </footer>
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

    	
    	
            