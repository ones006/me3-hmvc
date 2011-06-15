<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Metrasat :: <?=$heading.' &raquo; '.$this->config->item('FAL_website_name')?></title>	
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets').'/'.$this->config->item('FAL_css');?>/screen.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one-themes').'/'.$this->config->item('FAL_css');?>/plugin.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one-themes').'/'.$this->config->item('FAL_css');?>custom.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	<link rel="stylesheet" href="<?=base_url().$this->config->item('FAL_assets_one-themes').'/'.$this->config->item('FAL_css');?>/login.css" type="text/css" media="screen" title="no title" charset="utf-8" />

</head>

<body >

<div id="wrapper">
    <div id="header">
    	<h1>FreakAuth_light&reg;</h1>
    	<?=$this->load->view($this->config->item('FAL_template_dir').'template/menu');?>  
	</div>
