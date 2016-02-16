
<?php /*<div id="loading">
  <img id="loading-image" src="http://localhost/CodeIgniter/images/loading.gif" alt="Loading..." />
</div>
<script language="javascript" type="text/javascript">
  $(window).load(function() {
    $('#loading').hide();
  });
</script>
<style>
#loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #1d1d1d;
  z-index: 99;
  text-align: center;
}

#loading-image {
  position: absolute;
  top:150px;
  left: 300px;
  z-index: 100;
}
</style> */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> STORE CRAFT</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/js" href="http://localhost/CodeIgniter/bootstrap/bootstrap.min.js">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,100,200,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow27.js"></script>




</head>
<div>
<div class="header col-12">
<div class="header_inner_wrap">

<div class="header_left col-md-3">
<div class="header_left_inner">
<div class="header_logo">
<a href="http://localhost/CodeIgniter"><img src="http://localhost/CodeIgniter/images/logo7.png" alt="logo" height="30" width="250"></a>
</div>
</div>
</div>
<div class="header_center col-md-4">
<div class="header_center_text header1">
<ul class="navigation">

<li><a href="http://localhost/CodeIgniter/index.php/feature_ctrl/features">FEATURES</a></li>
<li><a href="http://localhost/CodeIgniter/index.php/pricing_ctrl/pricing">PRICING</li>
<li><a href="http://localhost/CodeIgniter/index.php/support_ctrl/support">SUPPORTED CARTS</a></li>
</ul>
</div>
</div>
<div class="header_right col-md-2">
<div class="header_right_text header1">
<ul class="navigation">
<?php
session_start();
if(isset($_SESSION['EMAIL'])){?>

	  <li><a href="http://localhost/CodeIgniter/index.php/home_ct/logout">LOGOUT</a></li> 

      
 <?php } else { ?>
    <li><a id="Login">LOGIN</a></li> 
 <?php } ?>
 
<li><a id="Login1">LET'S TALK</a></li>
</ul>
</div>
</div>
<div class="header_rightmost col-5">
<div class="text_header header1">
<ul class="navigation">
<div class="header_right_top">
<li>
Try it free, you'll like it 
</li>
    </div>
</ul>
<div class="arrow">
<img class="header_arr_img" src="http://localhost/CodeIgniter/images/arr_half.png">
</div>
</div>

</div>
</div>
</div>
</div>
<div id="abc" class="abcd">
<div id="popupContact" class="popupContact">
<form action="http://localhost/CodeIgniter/index.php/login_ctrl1/login1" id="form11" method="post" name="form11">
<input id="email11" name="email11" placeholder="Email" type="Email">
<input id="Password11" name="Password11" placeholder="Password" type="Password">
<input type="submit" id="submit11" name="submit11" placeholder="submit">
<div class="lef">
<a href="http://localhost/CodeIgniter/index.php/login_ctrl"><h6>New User?</h6></a>
<a href="http://localhost/CodeIgniter/index.php/adminlogin_ctrl"><h6> ADMIN LOGIN </h6></a>
</div>
</form>
</div>
</div>

<div id="def" class="hor_lets" style="overflow: hidden; display: block;">
			<div>
				<form action="" method="POST">
						<table style=" margin: 0 auto;padding: 0 !important;width: 80%;">
					<tbody><tr>
						<td style="border-right: 1px solid #666666;"><div class="hor_lets_img"><img src="images/lets_talk4.png"></div><div style="font-family:tahoma;" class="hor_lets_span"><span class="skype_c2c_print_container notranslate">+1 518 618 1040</span><span id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" data-numbertocall="+15186181040" data-isfreecall="false" data-isrtl="false" data-ismobile="false"></span></div></td>
						
						
                        <td style="border-right: 1px solid #666666;"><a href="#" class="big-link" data-reveal-id="myModa2"><div class="hor_lets_img"><img src="images/lets_talk1.png"></div><div class="hor_lets_span"> hello@storescraft.com
                        	</div></a></td>
						
						
			
		
                       
                        
                        <td style="border-right: 1px solid #666666;">
						<div class="hor_lets_img">
						
							<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
							<div id="SkypeButton_Call_storescraft_1">
							  
							  <script type="text/javascript">
								Skype.ui({
								  "name": "dropdown",
								  "element": "SkypeButton_Call_storescraft_1",
								  "participants": ["storescraft"],
								  "imageSize": 24
								});
							  </script>
							</div>
						</div>
						</td>
                  
						
						<td><div class="hor_lets_img"><img src="images/lets_talk2.png"></div>
						<div class="hor_lets_span"><a href="">chat right here</a></div></td>
					</tr>
				</tbody></table>
				
			</form></div>
		</div>
		</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
 $('#abc').hide();
  $('#def').hide();
  $("#Login").click(function(){
   $("#abc").slideToggle("medium");
   $('#def').hide();
  });
});
$(document).ready(function(){
 $('#abc').hide();
  $('#def').hide();
  $("#Login1").click(function(){
    $("#def").slideToggle("medium");
	  $('#abc').hide();

  });
});

</script>
</html>

