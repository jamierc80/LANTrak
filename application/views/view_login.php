<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<div class="row">
<div class="col-xs-3"></div>
<div class="col-xs-6">
<form method="post" action="<?php echo base_url(); ?>login/index/">
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <input type="hidden" name="login" value="1" />
  <button type="submit" class="btn btn-success">Login</button>
</form>
<br />
<a href="<?php echo base_url(); ?>login/forgotten/">Forgotten Password</a>
</div>
<div class="col-xs-3"></div>
</div>

</div>
</div>
</div>