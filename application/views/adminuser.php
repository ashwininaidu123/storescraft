

<?php if($result){ ?>
<div class="products1">
<div class="productsinn12">
<h1> Users </h1>
<div class="productheader">
     <table>
        <tr>
		<td class="p11">ID</td>
	    <td class="c11">Url</td>
        <td class="p21">Email</td>
        <td class="p31">Password</td>
        <td class="p41">Edit</td>
        <td class="p51">Delete</td>
      
		</tr>
	</table>
</div>
<div class="productheader1">
     <?php foreach($result as $row):?>
	 <table>
        <tr>
		<td class="p11"><?= $val = $row->id?></td>
        <td class="c11"><?=$row->url?></td>
        <td class="p21"><?=$row->email?></td>
        <td class="p31"><?=$row->password?></td>
        <td class="p41"><a href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/displaypage1?id=<?php echo $val; ?>"><img alt="uploaded image" src="http://localhost/CodeIgniter/images/edit.jpg"></a></td>
        <td class="p51"><a  href="http://localhost/CodeIgniter/index.php/productupdate_ctrl/delete1?id=<?php echo $val; ?>"><img alt="uploaded image" src="http://localhost/CodeIgniter/images/delete.jpg"></a></td>
		
		</tr>
		</table>
        <br />
        <?php endforeach;?>
		<center>
	<a href="http://localhost/CodeIgniter/index.php/home_ct1"><button type="submit" name="file_submit" id="Fdf" value="Add">Back</button></a>	
		</center>
</div>
</div>
</div>

<?php } else { ?>
		<div class="ifno">
		<h1> No Users, Click on Add Users. </h1>
		</div>
		<?php } ?>
