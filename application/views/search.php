<style>
.adminbutton3 {
  width: 50%;
  margin: 1% auto;
  float: left;
}
.admin_panel_inner {
  width: 50%;
  margin: 0 auto;
}
</style>
<?php global $val; ?>
<div class="admin_panel ">
<div class="admin_panel_inner">
<div class="adminbutton3">
<div class="adminbutton3_inner">
<a  href="http://localhost/CodeIgniter/index.php/home_ct"><button type="submit" class="dashboard" name="submit_d4" id="submit_d4" placeholder="submit">Home</button></a>
</div>
</div>
<div class="adminbutton3">
<div class="adminbutton3_inner">
<a  href="http://localhost/CodeIgniter/index.php/display_products/addproductview"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Back</button></a>
</div>
</div>

</div>
</div>

<div class="products">

<div class="productsinn">
<h3> Products </h3>
<div class="productheader">
     <table>
        <tr>
		<td class="p1">ID</td>
	 
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

     <?php foreach($result as $row):?>
	 <table>
        <tr>
	
        <td class="p1"><?=$val=$row->id?></td>
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




<style>
.productsinn {
  width: 80%;
  margin: 0 auto;
  float:none;
}
</style>




   