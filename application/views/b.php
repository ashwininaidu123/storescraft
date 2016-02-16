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
							url: 'http://localhost/CodeIgniter/index.php/display_products/addfilter3?values='+$values+'&group='+$group,
							type: 'get',
							
							success: function(response) {
								$('.productsinn').html(response);
							}
						});
				}
	});
</script>
<div class="productsinn11">

<div class="productsinn1143">
<h3>Add Brand</h3>
<form action="http://localhost/CodeIgniter/index.php/display_products/addbrand" method="post" enctype="multipart/form-data" id="ctat" >
		<input type="text" name="brand" id="brand" />
		<input type="submit" name="brasub" id="brasub"/>
</form>
<h3>Brand</h3>
<?php if($result){ ?>
     <?php foreach($result as $row):?>
<div class="pk1"><input type="checkbox"  id="ans5" class="reload3" value="<?=$row->brand?>"/></div>
<div class="pr1"><p><?=$row->brand?></p></div>

    <?php endforeach;?>
		<?php } else { ?>
		<div class="ifno">
		<h6> No brand, Click on Add brand. </h6>
		</div> 
		<?php } ?>
</div>
</div>
