<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br>
<DIV class="container">
<form class="form-horizontal" action="<?php echo site_url('products/insert'); ?>" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>
 

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">  NAME</label>  
  <div class="col-md-4">
  <input id="name" name="name"   class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">PRICE</label>  
  <div class="col-md-4">
  <input id="price" name="price"   class="form-control input-md" required="" type="text">
    
  </div>
</div>
 


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">IMAGES</label>
  <div class="col-md-4">
    <input   class="input-file" name="image" id="image" type="file" multiple>
  </div>
</div>


<div class="form-group">
   
  <div class="col-md-4 col-md-offset-4">
    <input type="submit" name="submit"  class="input-file"   >
  </div>
</div>

 

</fieldset>
</form>
</div>