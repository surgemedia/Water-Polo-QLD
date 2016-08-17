 

<div class="molecule social-feeds">
 <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active col-md-6">
    			<a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab"><i class="icon-facebook"></i></a>
    			</li>
    <li role="presentation" class="col-md-6 twitter" ><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab"><i class="icon-twitter"></i></a></li>
  </ul>
	
  <!-- Tab panes -->
  <div class="tab-content">
    
	    <div role="tabpanel" class="tab-panel active" id="facebook">
			<?php echo $vars['facebook']; ?>
	    </div>
	    <div role="tabpanel" class="tab-panel" id="twitter">
			<?php echo $vars['twitter']; ?>
	    </div>
		
  </div>
</div>