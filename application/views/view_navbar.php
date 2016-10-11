<div class="navbar navbar-default">
  <div class="container">
  	<div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span> 
    	</button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <?php if($this->session->userdata('logged_in')===1) { ?>
        <li class="dropdown<?php if($this->uri->segment(1)==="main"){ echo " active"; } ?>">
    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Main <span class="caret"></span></a>
      		<ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>main/sites/">Sites</a></li>
                <li><a href="<?php echo base_url(); ?>main/hosts/">Hosts</a></li>
      		</ul>
    	</li>
		<?php if($this->session->userdata('user_role')===1) { ?>
        <li class="dropdown<?php if($this->uri->segment(1)==="admin"){ echo " active"; } ?>">
    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
      		<ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>admin/users/">Users</a></li>
                <li><a href="<?php echo base_url(); ?>admin/roles/">Roles</a></li>
                <li><a href="<?php echo base_url(); ?>admin/countries/">Countries</a></li>
                <li><a href="<?php echo base_url(); ?>admin/hosttypes/">Host Types</a></li>
      		</ul>
    	</li>
        <?php } ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="<?php echo base_url(); ?>login/logout/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    <?php } ?>
    </div>
  </div>
</div>
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <?php if(isset($title)){echo '<h3 class="panel-title">' . $title . '</h3>'; } ?>
  </div>
  <div class="panel-body clearfix">
