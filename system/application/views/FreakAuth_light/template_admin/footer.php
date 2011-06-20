	</div> <!-- #content -->

	

	<div id="footer">
		<p>Copyright &copy; <?php echo date('Y'); ?> <a href="javascript:;">Metrasat</a>, all rights reserved.</p>	
	</div> <!-- #footer -->
</div> <!-- #wrapper -->
<script  type="text/javascript" src="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/slate/slate.js"></script>
<script  type="text/javascript" src="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="<?=base_url().$this->config->item('FAL_assets_one').'/'.$this->config->item('FAL_css');?>/plugin.js"></script>
<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
</script>
</body>
</html>
