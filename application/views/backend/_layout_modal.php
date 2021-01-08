<?php echo $this->load->view('backend/components/page_head'); ?>

  <body style="background:#555">

  	<div class="modal show" role="dialog">

  		<?php echo $this->load->view($subview); //Subview is set in controller ?> 

	  
	  <div class="modal-footer">
	  	&copy; <?php echo $meta_title; ?>
	  </div>
	</div>

<?php echo $this->load->view('backend/components/page_tail'); ?>  