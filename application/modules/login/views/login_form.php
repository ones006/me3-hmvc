<!--<div id="login_form">

	<h1>Login, Fool!</h1>
    <?php 
	echo form_open('login/validate_credentials');
	echo form_input('username', 'Username');
	echo form_password('password', 'Password');
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account');
	echo form_close();
	?>

</div>--><!-- end login_form-->

<div id="login">
	<div id="title"><span><h1 >Metra SOM</h1></span></div>
	<div id="login-body" class="clearfix">        
		<?php echo form_open('login/validate_credentials',array('name'=>'login','id'=>'login_form'));?>  
			<div class="content_front">
	        <div class="pad">
	        	<div class="field">
				<label>Username:</label>
				<div class="">
					<span class="input"><input name="username" id="login_email" class="text" type="text" value="username" /></span>
				</div>
				</div> <!-- .field -->
				
				<div class="field">
				<label>Password:</label>
				<div class=""><span class="input"><input name="password" id="login_password" class="text" type="password" value="password" /> <a style="" href="javascript:;" id="forgot_my_password">Forgot password?</a></span></div>
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
