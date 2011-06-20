	<div class="portlet x9">
		<div class="portlet-header"><h4>Form <?=$action?></h4></div>
			<div class="portlet-content">
				<?=form_open('admin/users/add',array('class'=>array('form','label-inline')))?>
					<div class="field">
						<label for="fname">First Name </label> 
						<input id="fname" name="fname" size="50" type="text" class="medium" />
					</div>
					<div class="field">
						<label for="lname">Last Name </label>
						<input id="lname" name="lname" size="50" type="text" class="medium" />
					</div>
					<div class="field">
						<label for="address1">Address 1 </label>
						<input id="address1" size="50" type="text" class="large" />
					</div>
					<div class="field">
						<label for="address2">Address 2</label>
						<input id="address2" size="50" type="text" class="large" />
					</div>
					<div class="field">
						<label for="country" class="">Country </label>
						<input id="country" name="country" size="12" type="text" class="medium" />
						<p class="field_help">Field help text.</p>
					</div>
					<div class="field phone_field">
						<label for="telephone">Telephone</label> 
						<input id="telephone" size="3" type="text" class="xsmall" /> - 
						<input size="3" type="text" class="xsmall" /> - 
						<input size="4" type="text" class="xsmall" />
								<p class="field_help">(###) - ### - ####</p>
					</div>
					<div class="field clearfix"><label for="lname">File Upload </label> 							<input style="opacity: 0;" size="19" class="file" type="file" />
					</div>
							
					<div class="field">
						<label for="type">Type </label>
						<select id="type" class="medium">
							<optgroup label="Type of Whatever">
							<option selected="selected">Corporate</option>
							<option>Individual</option>
							</optgroup>
						</select>
					</div>
					<div class="controlset field">
						<span class="label">Preferred Location</span>
						<div class="controlset-pad">
							<input name="radio1" id="radio1" value="1" type="radio" /> 
							<label for="radio1">Option 1</label><br />
							<input name="radio1" id="radio2" value="1" type="radio" />
							<label for="radio2">Option 2</label><br />				
							<input name="radio1" id="radio3" value="1" type="radio" /> 
							<label for="radio3">Option 3</label><br />
						</div>
					</div>			
				
					<div class="controlset field">
						<span class="label">Something Else </span>
						<div class="controlset-pad">
						<input name="approved" id="check1" value="1" type="checkbox" />  
						<label for="check1">Some Option 1</label><br />
						<input name="pending" id="check2" value="1" type="checkbox" />  
						<label for="check2">Some Option 2</label><br />
						<input name="actives" id="check3" value="1" type="checkbox" /> 
						<label for="check3">Some Option 3</label><br />
					</div>
				</div>	
				<div class="field">
					<label for="description">Description</label> 
					<textarea rows="7" cols="50" name="description"></textarea>
				</div>
				<br />
				<div class="buttonrow">
					<button class="btn">Primary Action</button>
					<button class="btn btn-orange">Secondary Action</button>
					<button class="btn btn-grey">Tertiary Action</button>
				</div>
		</form>
		<br /><br /><br /><br />
	</div>
	</div>
	<div class="portlet x3">
		<div class="portlet-header"><h4>Sidebar</h4></div>
		<div class="portlet-content">
			<p>Proses penambahan user atau pengguna baru</p>
		</div>			
	</div>	
	<div class="xbreak"></div>

<h2><?=$action?></h2>

<p>&nbsp;</p>
<?=form_open('admin/users/add')?>
<!--USERPROFILE DATA-->
<div class="userprofile">
<fieldset>
<legend>User profile</legend>
<?php if ($this->config->item('FAL_create_user_profile') AND !empty($fields))
{
	foreach ($fields as $field=>$label)
	{?>
	<p><label for="<?=$field?>"><?=$label?>:</label>
    <?=form_input(array('name'=>$field, 
	                    'id'=>$field,
	                    'maxlength'=>'45', 
	                    'size'=>'25',
	                    'value'=>(isset($this->fal_validation) ? $this->fal_validation->{$field} : '')))?>
	  <?=(isset($this->fal_validation) ? $this->fal_validation->{$field.'_error'} : '')?></p>

<?php }
}
elseif($this->config->item('FAL_create_user_profile') AND empty($user_profile)) {?> 
<p class="error"><?=$this->lang->line('FAL_no_DB_data');?></p>
<?php } else {?><p class="error">userprofile disabled in config</p><?php }?>
</fieldset>
</div>
<!-- END USERPROFILE DATA-->


<fieldset>
<legend>User main</legend>

      <p><label for="user_name">username:</label>
       <?=form_hidden('id', 0);?>
       <?=form_input(array('name'=>'user_name', 
	                       'id'=>'user_name',
	                       'maxlength'=>'45', 
	                       'size'=>'35',
	                       'value'=>(isset($this->fal_validation) ? $this->fal_validation->{'user_name'} : '')))?>
	  <?=(isset($this->fal_validation) ? $this->fal_validation->{'user_name'.'_error'} : '')?>
	  </p>
    
      <p><label for="email">e-mail:</label>
      <?=form_input(array('name'=>'email', 
	                       'id'=>'email',
	                       'maxlength'=>'120', 
	                       'size'=>'35',
	                       'value'=>(isset($this->fal_validation) ? $this->fal_validation->{'email'} : '')))?>
    	<?=(isset($this->fal_validation) ? $this->fal_validation->{'email'.'_error'} : '')?>
      </p>

      <p><label for="password">password:</label>
      <?=form_password(array('name'=>'password', 
	                       'id'=>'password',
	                       'maxlength'=>'16', 
	                       'size'=>'16',
	                       'value'=>(isset($this->fal_validation) ? $this->fal_validation->{'password'} : '')))?>
    	<?=(isset($this->fal_validation) ? $this->fal_validation->{'password'.'_error'} : '')?>
      </p>

      <p><label for="password_confirm">retype password:</label>
      <?=form_password(array('name'=>'password_confirm', 
	                       'id'=>'password_confirm',
	                       'maxlength'=>'16', 
	                       'size'=>'16',
	                       'value'=>(isset($this->fal_validation) ? $this->fal_validation->{'password_confirm'} : '')))?>
    <?=(isset($this->fal_validation) ? $this->fal_validation->{'password_confirm'.'_error'} : '')?>
     </p>

    <?php if ($this->config->item('FAL_use_country'))
        {?>
    
      <p><label for="country_id">country:</label>
      <?=form_dropdown('country_id',
	                 $countries,
	                 (isset($this->fal_validation) ? $this->fal_validation->country_id : 0))?>
	<?=(isset($this->fal_validation) ? $this->fal_validation->{'country_id'.'_error'} : '')?>
    </p>
    
    <?php } ?>

    <p><label for="role">role:</label>
         <select name="role" id="role">
         <option value="">-------------</option>
         <?php foreach ($role_options as $value)
         {?>
         	<option value="<?=$value?>" <?=$this->fal_validation->set_select('role', $value)?>><?=$value?></option>
         <?php 
         }
         ?>
         </select>
         <?=(isset($this->fal_validation) ? $this->fal_validation->{'role'.'_error'} : '')?>
	</p>

      <p><label for="banned">is banned?</label>
		<?=form_checkbox('banned', 1, FALSE)?>
	</p>
</fieldset>

   <input type="submit" name="Submit" value="Add" />
   <input type="reset" name="Reset" value="reset" />

</form>
