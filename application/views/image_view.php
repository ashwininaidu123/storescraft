
<div class="admin_panel ">
<div class="admin_panel_inner">
<div class="adminbutton4">
<div class="adminbutton4_inner">
<a  href="http://localhost/CodeIgniter/index.php/home_ct"><button type="submit" class="dashboard" name="submit_d4" id="submit_d4" placeholder="submit">Home</button></a>
</div>
</div>
<div class="adminbutton1">
<div class="adminbutton1_inner">
<button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Catlog</button>
</div>
</div>
<div class="adminbutton2">
<div class="adminbutton2_inner">
<button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit"> Reset </button>
</div>
</div>
<div class="adminbutton3">
<div class="adminbutton3_inner">
<a  href="http://localhost/CodeIgniter/index.php/csv_ctrl/import"><button type="submit" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Csv import</button></a>
</div>
</div>
</div>
<div class="products">
<div class="productsinn">
<h1> Products </h1>
<div class="productheader">
     <table>
        <tr>
		<td class="p1">ID</td>
       <td class="p2">Category</td>
        <td class="p3">Product</td>
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
        <td class="p3"><?=$row->Product?></td>
        <td class="p4"><?=$row->Productprice?></td>
        <td class="p5"><?=$row->Manfacturer?></td>
        <td class="p9"><?=$row->SKU?></td>
        <td class="p6"><?=$row->unit_present?></td>
        <td class="p7"><?=$row->ShortDescription?></td>
        <td class="p8">
<img alt="uploaded image" src="<?=base_url(). 'uploads/' . $upload_data['raw_name'].$upload_data['file_ext'];?>"></td>
		
		<td class="p_edit"><a  href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/displaypage?id=<?php echo $val; ?>"><button type="submit" name="submit" id="s1"  value="back">View/Edit</button></a>
		<a  href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/delete?id=<?php echo $val; ?>""><button type="submit" name="submit" id="s1"  value="back">Delete</button></a> </td>
		</tr>
		</table>
        <br />
        <?php endforeach;?>
</div>
</div>
  

</div>
