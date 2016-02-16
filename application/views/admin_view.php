<?php global $x; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='ans1']:checked"), function(){            
                favorite.push($(this).val());
				
            });
			if(favorite){
				var x = '1';
				alert('1');
			}
			else{
				var x = '0';
				
				alert('x');
			}
         favorite.join(",");
				refreshData1(favorite);
        });
	 function refreshData1($values1){
				
				alert($values1);
				 $.ajax({
							url: 'http://localhost/CodeIgniter/index.php/display_products/catalog?values1='+$values1,
							type: 'get',
							
								success: function(response) {
								 window.location.href ='http://localhost/CodeIgniter/index.php/display_products/catalog1?values1='+$values1;
							}
						
						});
				}
    });
</script>
<div class="admin_panel ">
<div class="admin_panel_inner">
<div class="adminbutton4">
<div class="adminbutton4_inner">
<a  href="http://localhost/CodeIgniter/index.php/home_ct1"><button type="submit" class="dashboard" name="submit_d4" id="submit_d4" placeholder="submit">Home</button></a>

<?php echo $x;?>
</div>
</div>
<div class="adminbutton1">
<div class="adminbutton1_inner">
<button type="button" class="dashboard" name="submit_d11" id="submit_d11" placeholder="submit">Catlog</button>
</div>
</div>
<div class="adminbutton2">
<div class="adminbutton2_inner">
 <button type="submit" id="reset" > Reset </button>
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
<div class="products1">
<div class="productsinn34">
<h1> Products </h1>
<div class="productheader">
     <table>
        <tr>
		<td class="p1">ID</td>
		<td class="p1">UID</td>
	    <td class="c1">Catlog</td>
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
		<td class="p1"><?=$row->uid?></td>
		<td class="c1"><input type="checkbox"  id="ans1" name="ans1" class="reload3" value="<?=$row->id?>"/></td>
        <td class="p2"><?=$row->category?></td>
        <td class="p3"><?=$row->Product?></td>
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
<?php } else { ?>
		<div class="ifno">
		<h1> No products, Click on Add products. </h1>
		</div>
		<?php } ?>


