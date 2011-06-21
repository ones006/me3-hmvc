<div id="login">
	<h1 id="titles"><b>Metrasat System</b></h1>
<div id="login-body" class="clearfix"> 
	<?=isset($this->fal_validation->login_error_message) ? $this->fal_validation->login_error_message : ''?>
	
	<?=form_open($this->uri->uri_string(), array('id' => 'login_form'))?>
	      <div class="content_front">
	        <div class="pad">
	        	<div class="field">
					<label><?=$this->lang->line('FAL_user_name_label')?> :</label>
					<div class="">
						<span class="input">
							<?=form_input(array('name'=>'user_name', 
	                       'id'=>'user_name',
								  'class'=>'text',
	                       'maxlength'=>'30', 
	                       'size'=>'30',
	                       'value'=>''))?>
    						<?=(isset($this->fal_validation) ? $this->fal_validation->{'user_name'.'_error'} : '')?>
						</span>
					</div>
				</div> <!-- .field -->
				<div class="field">
					<label><?=$this->lang->line('FAL_user_password_label')?> :</label>
					<div class="">
						<span class="input">
						<?=form_password(array('name'=>'password', 
	                       'id'=>'login_password',
								  'class'=>'text',
	                       'maxlength'=>'30', 
	                       'size'=>'30',
	                       'value'=>''))?>
						<?=(isset($this->fal_validation) ? $this->fal_validation->{'password'.'_error'} : '')?>

    					<?=anchor($this->config->item('FAL_forgottenPassword_uri'), $this->lang->line('FAL_forgotten_password_label'))?>
						</span>
					</div>
				</div> <!-- .field -->
				<div class="field">
					<label>Captcha :</label>
					<div class="">
						<span class="input">
						<?php
						if ($this->config->item('FAL_use_captcha_login'))
						{?>
						<label for="security"><?=$this->lang->line('FAL_captcha_label')?>:</label>
						<?=form_input(array('name'=>'security', 
											        'id'=>'security',
														'class'=>'text',
											        'maxlength'=>'25', 
											        'size'=>'20',

											        'value'=>''))?>
						 <?=$this->load->view($this->config->item('FAL_captcha_img_tag_view'), null, true)?><?=(isset($this->fal_validation) ? $this->fal_validation->{'security'.'_error'} : '')?>
						 <?php }?>
						</span>
					</div>
				</div> <!-- .field -->
				<div class="checkbox">
					<span class="label">&nbsp;</span>
					
					<div class=""><input name="remember" id="remember" class="checkbox" value="yes" type="checkbox" /> &nbsp;&nbsp;<label style="display: inline;" for="remember">Remember me on this computer</label></div>
				</div> <!-- .field -->
				<div class="field">
					<span class="label">&nbsp;</span>
					<div class=""><button type="submit" class="btn">Login</button></div>
				</div> <!-- .field -->
	        </div>
	    </div>
	</form>
</div>
</div> <!-- #login -->

