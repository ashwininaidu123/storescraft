
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
<h1>Product update</h1>
<?php
global $id;
?>
  <?php foreach($result as $row):?>

<form action="http://localhost/CodeIgniter/index.php/productupdate_ctrl/productupdate?id=<?=$id=$row->id?>" method="post" enctype="multipart/form-data" id="fmid" >
<label>category Name:</label>
 <input type="text" name="c_name" id="nam1" placeholder="Name" value="<?=$row->category?>" required></br>
<label>brand Name:</label>
 <input type="text" name="b_name" id="nam2" placeholder="Name" value="<?=$row->brand?>" required></br>
 
<label>Product Name:</label>
 <input type="text" name="p_name" id="nam" placeholder="Name" value="<?=$row->Product ?>" required></br>

 <label>Product Price:</label>
 <input type="text" name="p_price"  id="pri" placeholder="price" value="<?=$row->Productprice?>" required></br>
   <label>Manfacturer:</label>
 <input type="text" name="manf" id="manf" placeholder="Name" value="<?=$row->Manfacturer?>" required></br>
<label>SKU:</label>
<input type="text" name="sku"  id="col" placeholder="sku"  value="<?=$row->SKU?>" required></br>
<label>unit_present</label>
<input type="text" name="unit"  id="col1" placeholder="unit_present" value="<?=$row->unit_present?>"  required></br> 
<label>Description:</label>
 <textarea name="des"  id="qua"></textarea></br>
<label>Short Description:</label>
 <textarea name="sdes"  id="qua1"></textarea></br>
 <label>Upload image:</label>
  <input class="imgup" type="file" name="userfile" size="20"  required /></br><br><br>
<button type="submit" name="upload" id="s" value="Add">update</button>
</form>
 <?php endforeach;?>
<a  href="http://localhost/CodeIgniter/index.php/display_products/addproductview"><button type="submit" name="submit" id="s"  value="back">Back</button></a>

</div>
</div>
</div>


		</body>
</html>

