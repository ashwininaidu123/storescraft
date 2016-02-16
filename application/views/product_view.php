
<style>
#loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: none;
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(function(){

$('input[type="checkbox"]').click(function(){

				// Here we check which boxes in the same group have been selected
				// Get the current group from the class
				var group = $(this).attr("class");
				
				var checked = [];

				// Loop through the checked checkboxes in the same group
				// and add their values to an array
				$('input[type="checkbox"].' + group + ':checked').each(function(){
					checked.push($(this).val());
				
				});
	if(checked == "")
				{
					location.reload();
				}
				refreshData(checked, group);
			});
     function refreshData($values, $group){
				
				
				 $.ajax({
							url: 'http://localhost/CodeIgniter/index.php/display_products/addfilter?values='+$values+'&group='+$group,
							type: 'get',
							
							success: function(response) {
								$('.productsinn').html(response);
							}
						});
				}
				


				
});
$(function(){
$('input[type="checkbox"]').click(function(){	

var group = $(this).attr("class");
var value1 = $(this).val();

refreshData1(value1, group);

});	
        function refreshData1($values1, $group){
				
				
				 $.ajax({
							url: 'http://localhost/CodeIgniter/index.php/display_products/addfilter1?values1='+$values1+'&group='+$group,
							type: 'get',
							
							success: function(response) {
								$('.productsinn11').html(response);
							}
						});
				}
});
</script>

<div id="loading">
  <img id="loading-image" src="http://localhost/CodeIgniter/images/loading.gif" alt="Loading..." />
</div>
<?php global $val; ?>
<div class="admin_panel ">
<div class="admin_panel_inner">
<div class="adminbutton4">
<div class="adminbutton4_inner">
<a  href="http://localhost/CodeIgniter/index.php/home_ct"><button type="submit" class="dashboard" name="submit_d4" id="submit_d4" placeholder="submit">Home</button></a>
</div>
</div>
<div class="adminbutton1">
<div class="adminbutton1_inner">
<a  href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/productpdf"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Catlog</button></a> 
</div>
</div>
<div class="adminbutton2">
<div class="adminbutton2_inner">
 <button type="submit" id="reset" onclick="myFunction()"> Reset </button>
</div>
</div>
<div class="adminbutton3">
<div class="adminbutton3_inner">
<a  href="http://localhost/CodeIgniter/index.php/Uploadfile/import"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Csv import</button></a>
</div>
</div>
</div>
</div>

<?php if($result){ ?>
<div class="products">
    <div class="leftsidebar">
    <div class="leftsidebar1">
	<div class="productsinn1">
<div class="productsinn134">
<h3>Search</h3>
<form action="http://localhost/CodeIgniter/index.php/display_products/search" method = "post">
<input type="text" name = "keyword" />
<input type="submit"  id="search" value = "Search" />
</form>
</div>
</div>
<div class="productsinn1">
<div class="productsinn134">
<h3> Add Category</h3>
<form action="http://localhost/CodeIgniter/index.php/display_products/addcata" method="post" enctype="multipart/form-data" id="ctat" >
		<input type="text" name="catat" id="catat" />
		<input type="submit" name="catsub" id="catsub"/>
</form>
<h3>Category</h3>
<?php if($result1){ ?>
     <?php foreach($result1 as $row):?>
<div class="pk1"><input type="checkbox"  id="ans" class="reload2" value="<?=$row->catagory?>"
 /></div>
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
<form action="http://localhost/CodeIgniter/index.php/display_products/addbrand" method="post" enctype="multipart/form-data" id="ctat" >
		<input type="text" name="brand" id="brand" />
		<input type="submit" name="brasub" id="brasub"/>
</form>
<h3>Brand</h3>
<?php if($result2){ ?>
     <?php foreach($result2 as $row):?>
<div class="pk1"><input type="checkbox"  id="ans1" class="reload3" value="<?=$row->brand?>"/></div>
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
</div>
<div class="productsinn">
<h3> Products </h3>
<div class="productheader">
     <table>
        <tr>
		<td class="p1">ID</td>
	    <td class="c1">Catlog</td>
        <td class="p2">Category</td>
        <td class="p3">Brand</td>
        <td class="p4">Price</td>
        <td class="p5">Manfacturer</td>
        <td class="p9">SKU</td>
        <td class="p6">Units</td>
        <td class="p7">Description</td>
        <td class="p8">Image</td>
        <td class="p_edit">Action</td>
		</tr>
	</table>
	</div>
<div class="productsinn12123">
     <?php foreach($result as $row):?>
	 <table class="table1">
        <tr>
		<td class="p1"><?=$val=$row->id?></td>
         <form id="myForm">
		<td class="c1"><input type="checkbox" id="ans2" value="1" data-unchecked="0" /></td>
		</form>
        <td class="p2"><?=$row->category?></td>
        <td class="p3"><?=$row->brand?></td>
        <td class="p4"><?=$row->Productprice?></td>
        <td class="p5"><?=$row->Manfacturer?></td>
        <td class="p9"><?=$row->SKU?></td>
        <td class="p6"><?=$row->unit_present?></td>
        <td class="p7"><?=$row->ShortDescription?></td>
        <td class="p8"><img alt="uploaded image" src="<?=base_url(). 'uploads/'.$row->image;?>"></td>
		<td class="p_edit"><a href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/displaypage?id=<?php echo $val; ?>"><button type="submit" name="submit" id="s1"  value="back">View/Edit</button></a>
		<a  href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/delete?id=<?php echo $val; ?>"><button type="submit" name="submit" id="s1"  value="back">Delete</button></a> </td>
		</tr>
		</table>
        <br />
        <?php endforeach;?>
		
</div>
</div>
</div>
<?php } else { ?>
		<div class="ifno">
		<h1> No products, Click on Add products. </h1>
		</div>
		<?php } ?>





   