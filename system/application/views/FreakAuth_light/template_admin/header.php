<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>
		<?=$this->config->item('FAL_website_name')?> Administration Console &raquo; <?=$heading;?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv='expires' content='-1' />
	<meta http-equiv= 'pragma' content='no-cache' />
	<meta name='robots' content='all' />
	<meta name='author' content='Daniel Vecchiato 4webby.com' />
	<meta name='description' content='Administration console' />
	<script src="<?=base_url().$this->config->item('FAL_assets_shared').'/'.$this->config->item('FAL_js');?>/flash.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/screen.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/plugin.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/custom.css" type="text/css" media="screen" title="no title" charset="utf-8" />
</head>
<body>
<div id="wrapper" class="clearfix">
	
	<div id="top">
		<div id="header">
			<h1>Metrasat Sistem Operasional & Maintenance</h1>
			
			<div id="info">
				<h4>Welcome James</h4>
				
				<p>
					Logged in as Admin
					<br />
					You have <a href="javascript:;">5 messages</a>
				</p>
				
				<img src="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_images');?>/avatar.jpg" alt="avatar" />
			</div> <!-- #info -->
					
		</div> <!-- #header -->	
		
		<?php //$ci_uri = trim($this->uri->uri_string(), '/'); $att = ' class="mega mega-current"';?>
		<div id="nav">	
	
			<ul class="mega-container mega-grey">
	         <li class="mega"><?=anchor('admin/', 'Dashboard', array('class'=>'mega-current mega-link'))?></li>
		
				<li class="mega">				
					<a href="javascript:;" class="mega-tab">
						Pages
					</a>
					
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="#">Departement</a></li>
							<li><a href="#">Dokumen</a></li>			
							<li><?=anchor('admin/users', 'Users'      )?></li>			
						</ul>
					</div>						
				</li>
				
				<li class="mega">
				   <?=anchor('admin/sio_form_order/', 'Form Orders', array('class'=>'mega-link'))?>
				</li>
				
				<li class="mega">				
					<a href="<?=base_url()?>admin/perangkat_operasional/" class="mega-link">Perangkat Operasional</a>
				</li>	
		
				<li id="grid" class="mega">				
					<a href="<?=base_url()?>auth/logout" class="mega-link">logout</a>		
				</li>
		
				<li class="mega">
					<a href="forms.html" class="mega-link">Forms</a>
				</li>					
				
				<li class="mega">				
					<a href="charts.html" class="mega-link">Charts</a>
				</li>	
			</ul>
		</div> <!-- #nav -->
	</div> <!-- #top -->
	
	<div id="content" class="xfluid">






<!-- START NAVIGATION -->
<!--<div id="header">
	<div class="back_website">
	 [ <?=anchor('', 'back to website')?> ]
	</div>
	<div class="login">	  
		<a name="top"></a>
	  	<?=loginAnchorAdmin();?>  
	</div>
	
</div>

<div id="masthead">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
<tr>
<td><h1><?=$this->config->item('FAL_website_name')?> Administration Console</h1></td>
</tr>
</table>
</div>-->
