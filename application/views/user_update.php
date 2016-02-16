
<div id="loading">
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
</style>
<html>

<style>
.top-menu1{
	width:60%;
	margin:0 auto;
}
.top-menu1  li{ list-style:none;
	float:right;
}
.top-menu1 a{
	color:white;
	font-size:20px;
}

.fq1 {
width: 100%;
margin: 92px auto;
float: left;
}
.fq2 {
width: 70%;
margin: 0 auto;
}
.fq3{
	width:100%;
	text-align:center;
}
input#nam {
width: 60%;
padding: 10px;
}
input#nam1 {
width: 60%;
padding: 10px;
}
input#nam2{
width: 60%;
padding: 10px;
}
input#manf{
width: 60%;
padding: 10px;

}
#qua1{
width: 60%;
padding: 10px;

}
#qua{
width: 60%;
padding: 10px;

}
input#col{
width: 60%;
padding: 10px;
}
input#col1{
width: 60%;
padding: 10px;

}
input#pri{
width: 60%;
padding: 10px;
}
input#s{
width: 15%;
padding: 8px;
margin: 12px 0 10px 17px
}
label
{
	width:30%;
	float:left;
	color:gray;
	font-size:19px;
}
input#img {
margin-left: 380px;
padding: 15px;
}
 form#fmid{
	width:100%;
	margin:0 auto;
 }
</style>
</head>
<body>

</div>
<div class="fq1">
<div class="fq2">
<div class="fq3">
<h1>User update</h1>
<?php
global $id;
?>
  <?php foreach($result as $row):?>

<form action="http://localhost/CodeIgniter/index.php/adduser_ctrl/userupdate?id=<?=$id=$row->id?>" method="post" enctype="multipart/form-data" id="fmid" >
<label>category Name:</label>
 <input type="text" name="c_name1" id="nam1" placeholder="Name" value="<?=$row->url?>" required></br>
<label>brand Name:</label>
 <input type="text" name="b_name1" id="nam2" placeholder="Name" value="<?=$row->email?>" required></br>
 
<label>Product Name:</label>
 <input type="text" name="p_name1" id="nam" placeholder="Name" value="<?=$row->password ?>" required></br>

<button type="submit" name="upload1" id="s" value="Add">update</button>
</form>
 <?php endforeach;?>
<a  href="http://localhost/CodeIgniter/index.php/display_products/manageuser"><button type="submit" name="submit" id="s"  value="back">Back</button></a>

</div>
</div>
</div>


		</body>
</html>

