<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<div class="row">
<?php if($email != "" AND $email != 1){ ?>
<div class="container-fluid">
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success:</strong> Your password has been sent to your email address.
</div>
</div>
<?php } 
if($email === 1) { ?>
<div class="container-fluid">
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error:</strong> Please enter your email address below.
</div>
</div>
<?php } ?>
<div class="col-xs-3"></div>
<div class="col-xs-6">
<form method="post" action="<?php echo base_url(); ?>login/forgotten/">
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email) AND $email != 1){ echo $email; }?>">
  </div>
  <input type="hidden" name="forgotten" value="1" />
  <button type="submit" class="btn btn-success">Submit</button>
  <a href="<?php echo base_url(); ?>login/index/" class="btn btn-danger">Cancel</a>
</form>
</div>
<div class="col-xs-3"></div>
</div>

</div>
</div>
</div>