<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Add Sub Category</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/subusers/insert">
			<div class="control-group">
             <label>Category</label>
	         <select name="category_id"  class="form-control"  id="category_id">
			  <option value="" selected>-- Select --</option>
			   <?php  foreach($users as $dd){ ?>
			   <option value="<?php echo $dd->username; ?>"><?php echo $dd->username; ?></option>
			   <?php } ?>			  									
			 </select>	
	    </div>	    	    
			
				
				<div class="form-group">
					<label>Sub Category:</label>
					<input type="text" class="form-control" name="sub_category">
				</div>
				
				
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>