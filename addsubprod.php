<?php
include 'adminpanel.php';
?>
<h4 style="text-align:center; padding-top:5%">ADD New Products</h4>
<div class="row">
    <div class="col-md-8 mx-auto">
<form  method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="product" ></label>
      
    <input type="text"  name="product" class="form-control form-control-sm col-10-sm"  placeholder="Product name!">
    </div>
    <div class="form-group col-md-6">
      <label for="subproduct" ></label>
      
    <input type="text"  name="subproduct" class="form-control form-control-sm col-10-sm"  placeholder="Sub-Product name!">
    </div>
<!--     
    <div class="form-group col-md-6">
    
      <label for="subproduct"></label>
      <select  name="subproduct" class="form-control form-control-sm col-10-sm" >
      <option selected>subproduct...</option>
        <option>physics</option>
        <option>chemistry</option>
        <option>mathematics</option>
</select>
    </div> -->
  </div>
  
  <div class="form-group">
    <label for="brief"></label>
    <textarea type="text" name="description" class="form-control"  placeholder="Something about the sub-product......."></textarea>
  </div>

  <div class="form-row">
   
    <div class="form-group col-md-6">
      <label for="pic"> Product Display pic</label>
      <input type="file" name="pic" class="form-control form-control-sm col-10-sm" placeholder="Display pic here!" id="inputZip">
    </div>

    
  </div>  
  <button type="submit" name="submit" style="text-align:center" class="btn btn-outline-primary">add it</button>
</form>


<?php
add_sub_prod();
?>
</div>
</div>
