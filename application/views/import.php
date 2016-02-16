
<div class="main_file">
<div class="inner_file">
<p> Choose CSV File:</p>
<form  action="http://localhost/CodeIgniter/index.php/Uploadfile/importcsv" method="post" enctype="multipart/form-data" id="fileup" >
<div class="file">
 <input class="imgup1" type="file" name="userfile" size="20"  required />
</div>
<div class="file1">
<button type="submit" name="upload"  id="s" value="Add">upload</button>
</div>
</form>
<div class="file2">
<form action="http://localhost/CodeIgniter/index.php/csv_ctrl/filecheck" method="post" enctype="multipart/form-data" id="fileup" >
<a href="images/products.csv"><button type="submit" name="file_submit" id="FS" value="Add">Download sample file</button></a>
</form>
<a href="http://localhost/CodeIgniter/index.php/display_products/addproductviewadmin"><button type="submit" name="file_submit" id="FS" value="Add">Back</button></a>
</div>
</div>
</div>





