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
		
		
		<div id="nav">	
	
			<ul class="mega-container mega-grey">
	
				<li class="mega mega-current">
					<a href="index2.html" class="mega-link">Dashboard</a>	
				</li>
		
				<li class="mega">				
					<a href="javascript:;" class="mega-tab">
						Pages
					</a>
					
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="sample_gallery.html">Image Gallery</a></li>
							<li><a href="sample_reports.html">Reports</a></li>			
							<li><a href="sample_faq.html">FAQ</a></li>				
							<li><a href="sample_invoice.html">Invoice</a></li>	
							<li><a href="sample_calendar.html">Calendar</a></li>		
							<li><a href="sample_people.html">People Listing</a></li>	
							<li><a href="sample_details.html">Support Request</a></li>	
						</ul>
					</div>						
				</li>
		
				<li class="mega">				
					<a href="text.html" class="mega-link">Text Styles</a>		
				</li>
				
				<li class="mega">				
					<a href="grid.html" class="mega-link">Grid Layout</a>
				</li>	
		
				<li id="grid" class="mega">				
					<a href="tables.html" class="mega-link">Tables</a>		
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
		
		<div class="portlet x3" style="min-height: 300px;">
			
			<div class="portlet-header">
				<h4>Quick Info</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="info_table">
					<tbody>
						<tr>
							<td class="value">789</td>
							<td class="full">Visits Today</td>
						</tr>
						<tr>
							<td class="value">634</td>
							<td class="full">Unique Visits</td>
						</tr>
						<tr>
							<td class="value">56</td>
							<td class="full">Posts</td>
						</tr>
						<tr>
							<td class="value">425</td>
							<td class="full">Total Comments</td>
						</tr>
						<tr>
							<td class="value">13</td>
							<td class="full">Pending Comments</td>
						</tr>
						<tr>
							<td class="value">17</td>
							<td class="full">Support Requests</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
		<div id="dash_chart" class="portlet x9">
			
			<div class="portlet-header">
				<h4>Charting</h4>
				
				<ul class="portlet-tab-nav">
					<li class="portlet-tab-nav-active"><a href="#tab1" rel="tooltip" title="Visitors over last 48 hours.">Visitors </a></li>				
					<li class=""><a href="#tab2" rel="tooltip" title="Sales over last 48 hours.">Sales </a></li>
				</ul>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">				
				<div id="tab1" class="portlet-tab-content portlet-tab-content-active">
					<table class="stats" title="area" width="100%" cellpadding="0" cellspacing="0">
						<caption>2009/2010 Visitors by Industry (Million)</caption>
						<thead>
							<tr>
								<td>&nbsp;</td>
								<th>Banking</th>
								<th>Beauty</th>
								<th>Insurance</th>
								<th>Internet</th>
								<th>Media</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<th>2010</th>
								<td>12</td>
								<td>15</td>
								<td>13</td>
								<td>11</td>
								<td>13</td>
							</tr>
														
							<tr>
								<th>2009</th>
								<td>5</td>
								<td>6</td>
								<td>4</td>
								<td>7</td>
								<td>9</td>								
							</tr>							
						</tbody>
					</table>

				</div> <!-- .portlet-tab-content -->
				
				<div id="tab2" class="portlet-tab-content">
					
					<table class="stats" title="bar" width="100%" cellpadding="0" cellspacing="0">
						<caption>2009/2010 Sales by industry (Million)</caption>
						<thead>
							<tr>
								<td>&nbsp;</td>
								<th>Banking</th>
								<th>Beauty</th>
								<th>Insurance</th>
								<th>Internet</th>
								<th>Media</th>
							</tr>

						</thead>
						
						<tbody>
							<tr>
								<th>2009</th>
								<td>5</td>
								<td>6</td>
								<td>4</td>
								<td>7</td>
								<td>9</td>
							</tr>
							
							<tr>
								<th>2010</th>
								<td>12</td>
								<td>15</td>
								<td>13</td>
								<td>11</td>
								<td>13</td>
							</tr>							
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
		<div class="xbreak"></div> <!-- .xbreak -->
		
		<div class="portlet x6">			
			<div class="portlet-header">
				<h4>Support Requests</h4>
				
				<ul class="portlet-tab-nav">
					<li class="portlet-tab-nav-active"><a href="#allreq" rel="tooltip" title="All support requests.">All</a></li>						
					<li class=""><a href="#openreq" rel="tooltip" title="Recently opened to request.">Open</a></li>
					<li class=""><a href="#respreq" rel="tooltip" title="Recently responded to request.">Responded</a></li>
				</ul>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				
				<div id="openreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>
							
							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->
				
				<div id="allreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>
							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket closed">Closed</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>

	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket closed">Closed</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>

	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->
				
				<div id="respreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>

							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->

			</div> <!-- .portlet-content -->			
		</div>  <!-- .portlet -->
		
		
		<div class="portlet x6">
			
			<div class="portlet-header">
				<h4>Inbox</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="inbox_table">
					<tbody>
						<tr>
							<td class="avatar"><img src="images/avatar.jpg" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna al</td>
							<td class="who">Sent by Peter</td>
						</tr>
	
						<tr>
							<td class="avatar"><img src="images/avatar.jpg" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Consectetur adipiscing</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc.</td>
							<td class="who">Sent by Carla</td>
						</tr>
						<tr>
							<td class="avatar"><img src="images/avatar.jpg" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</td>
							<td class="who">Sent by Bruce</td>
						</tr>
						<tr>
							<td class="avatar"><img src="images/avatar.jpg" width="55" alt="avatar" class="avatar_img" /></td>
	
							<td class="full"><a href="#">Dignissim enim</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
							<td class="who">Sent by Jane</td>
						</tr>					
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
	</div> <!-- #content -->
	
	<div id="footer">
		
		<p>Copyright &copy; 2010 <a href="javascript:;">MadeByAmp</a>, all rights reserved.</p>
		
	</div> <!-- #footer -->
	
</div> <!-- #wrapper -->




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
