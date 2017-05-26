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
         <li class="has-sub"><a href="about.php"><span>Tentang Kami</span></a></li>
         <li class="active"><a href="kontak.php"><span>Kontak Kami</span></a></li>
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
			 <div class="intro">
                <h2 class="title">Kontak Kami</h2>
                <h3 class="subtitle">Petshopabbycan.com hadir memudahkan Anda  pecinta hewan di seluruh Indonesia untuk memenuhi berbagai keperluan hewan kesayangan Anda seperti anjing, kucing, hamster, kelinci, burung, ikan, reptil Kami juga menyediakan berbagai keperluan sehari - hari seperti makanan hewan, jasa grooming, suplemen, maupun aksesoris. Akan sangat mudah berbelanja di Petshopabbycan.com karena Anda tidak perlu jauh - jauh dan membuang waktu karena Anda hanya tinggal duduk  di komputer dan membuka website kami.</h3>
        	 </div>
			 <form method="post" action="contact-post.php">
					<div class="to">
                     	<input id="name" type="text" class="text" style="margin-left:9px" placeholder="Name">
					 	<input id="email" type="text" class="text"  placeholder="Email"  style="margin-left: 10px"> 	
					 	
					</div>
					<div class="text">
	                   <textarea id="msg" style="margin-left:9px" placeholder="Message:"></textarea>
	                </div>
	                <div>
	               		<a href="#" class="submit" style="margin-left:9px" onclick="kontak(document.getElementById('name').value,document.getElementById('email').value,document.getElementById('msg').value)">Submit</a>
	                </div>
               </form>
            </div>
		</div>
	</div>
 </div>
 <div class="map">
	 <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"> </a></small>
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

    	
    	
            