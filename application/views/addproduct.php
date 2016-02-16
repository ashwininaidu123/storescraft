


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
  width: 75%;
  margin: 0 auto;
  float: left;
  padding: 0 0 10%;
}
.fq2 {
width: 90%;
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
	  text-align: left;
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
    <div class="leftsidebar">
<div class="productsinn1">
<div class="productsinn134">
<h3> Add Catagory</h3>
<form action="http://localhost/CodeIgniter/index.php/addproduct_ctrl/addcata" method="post" enctype="multipart/form-data" id="ctat" >
		<input type="text" name="catat" id="catat" />
		<input type="submit" name="catsub" id="catsub"/>
</form>
<h3>Catagory</h3>
<?php if($result){ ?>
     <?php foreach($result as $row):?>
<div class="pk1"><input type="checkbox" id="ans" value="1" data-unchecked="0" /></div>
<div class="pr1"><p><?=$row->catagory?></p></div>
    <?php endforeach;?>
	<?php } else { ?>
		<div class="ifno">
		<h6> No Category, Click on Add Category. </h6>
		</div>
		<?php } ?>

</div>
</div>
<div class="productsinn11">

<div class="productsinn1143">
<h3>Add Brand</h3>
<form action="http://localhost/CodeIgniter/index.php/addproduct_ctrl/addbrand" method="post" enctype="multipart/form-data" id="ctat" >
		<input type="text" name="brand" id="brand" />
		<input type="submit" name="brasub" id="brasub"/>
</form>
<h3>Brand</h3>
<?php if($result1){ ?>
     <?php foreach($result1 as $row):?>
<div class="pk1"><input type="checkbox" id="ans" value="1" data-unchecked="0" /></div>
<div class="pr1"><p><?=$row->brand?></p></div>
    <?php endforeach;?>
		<?php } else { ?>
		<div class="ifno">
		<h6> No brand, Click on Add brand. </h6>
		</div>
		<?php } ?>
</div>
</div>
</div>
<div class="fq1">
<div class="fq2">
<div class="fq3">
<h1>Products</h1>

<form action="http://localhost/CodeIgniter/index.php/addproduct_ctrl/addproduct" method="post" enctype="multipart/form-data" id="fmid" >
<label>category Name:</label>

  <select name ="c_name">
    <?php foreach($result as $row):?>
 <option type="text" id="nam1" placeholder="Name" value="<?=$row->catagory?>" required><?=$row->catagory?></option> </br>
     <?php endforeach;?>
 </select>

<label>brand Name:</label>
  <select name ="b_name">
     <?php foreach($result1 as $row):?>
 <option type="text"  id="nam2" placeholder="Name" value="<?=$row->brand?>" required><?=$row->brand?></option> </br>
     <?php endforeach;?>
	  </select>
<label>Product Name:</label>
 <input type="text" name="p_name" id="nam" placeholder="Name" required></br>

 <label>Product Price:</label>
 <input type="text" name="p_price"  id="pri" placeholder="price" required></br>
   <label>Manfacturer:</label>
 <input type="text" name="manf" id="manf" placeholder="Name" required></br>
<label>SKU:</label>
<input type="text" name="sku"  id="col" placeholder="sku"  required></br>
<label>unit_present</label>
<input type="text" name="unit"  id="col1" placeholder="unit_present"  required></br>
<label>Description:</label>
 <textarea name="des"  id="qua"></textarea></br>
<label>Short Description:</label>
 <textarea name="sdes"  id="qua1"></textarea></br>
 <label>Upload image:</label>
  <input class="imgup" type="file" name="userfile" size="20"  required /></br><br><br>
<button type="submit" name="upload" id="s" value="Add">Add</button>
</form>
<a  href="http://localhost/CodeIgniter/index.php/home_ct"><button type="submit" name="submit" id="s"  value="back">Back</button></a>
</div>
</div>
</div>


		</body>
</html>

