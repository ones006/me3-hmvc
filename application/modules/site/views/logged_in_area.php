<?php $this->load->view('includes/header-cp'); ?>
<div id="content" class="xfluid">		
	<div class="portlet x12">
		<div class="portlet-header"><h4>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h4></div>
			<div class="portlet-content">
			<p>This section represents the area that only logged in members can access.</p>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer'); ?>
