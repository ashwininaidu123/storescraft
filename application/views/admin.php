
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="admin_panel ">
<div class="admin_panel_inner1">
<h1> Welcome to Dashboard </h1>
  <h3><?php echo $email;?></h3>

<div class="adminbutton11">
<div class="adminbutton1_inner">
<a href="http://localhost/CodeIgniter/index.php/display_products/manageuser"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Manage Users</button></a>
</div>
</div>

<div class="adminbutton22">
<div class="adminbutton2_inner">
<a href="http://localhost/CodeIgniter/index.php/display_products/addproductviewadmin"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Manage Products</button></a>
</div>
</div>
<div class="adminbutton33">
<div class="adminbutton3_inner">
<a  href="http://localhost/CodeIgniter/index.php/Uploadfile/import"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Csv import</button></a>
</div>
</div>
<div class="adminbutton44">
<div class="adminbutton3_inner">
<button type="submit" class="dashboard" name="submit_d122" id="submit_d122" placeholder="submit">Add user</button>
</div>
</div>
</div>
</div>

<div>

</div>


<div class='popup'>
<div class='cnt223'>
<div class="dash_main1">
<div class="dash_main_inner1">
<form action="http://localhost/CodeIgniter/index.php/adduser_ctrl/add" id="user"  method="POST" name="dashboard">
<div class="main_form">
<h1>Add User</h1>
<div class="button_d">
<div class="span1"><span>Url</span></div>
<input id="Password" class="input_d" name="urlu" placeholder="Url" type="url"></div>
<div class="button_d">
<div class="span1"><span>Email</span></div>
<input id="email_d"  class="input_d" name="emailu" placeholder="Email" type="Email"></div>
<div class="button_d">
<div class="span1"><span>Password</span></div>
<input id="Password" class="input_d" name="Passwordu" placeholder="Password" type="Password"></div>
<div class="button_d">
<div class="rig">
<input type="submit" class="input_d1" name="submitu" id="submitu" placeholder="submit">
</div>

</div>
</div>
</form>
</div>
</div>
<img src='http://www.xlvape.com/media/close.png' alt='quit' class='x' id='x' style="position: absolute;margin: 27px 0 0 547px;" />
<p>
<img src='http://localhost/CodeIgniter/images/background.jpg' alt='Popup' class='img' id='img' style="width: 100%;"/>
<br/>
<br/>

</p>


</div>
</div>


<script>
$(function(){

$('.popup').hide();

$('#submit_d122').click(function(){

var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();


$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
});
</script>


<style>
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index:999999;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
TOP: 17%;
position: fixed;
z-index: 99999999;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 0px auto;

position: relative;
z-index: 103;
padding: 10px;
border-radius: 5px;

}
.cnt223 p{
clear: both;
color: #555555;
text-align: justify;
}

.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.close{
position: absolute;
margin: -175px 0 0 235px;
font-size: 14px;
font-family: 'Play', sans-serif;
color: #006da8;
font-style: normal;
font-weight: 400;
}
.close:hover{
color: #006da8;
}
</style>