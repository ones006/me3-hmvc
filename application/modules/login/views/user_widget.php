<code style="font-family: Monaco, Verdana, Sans-serif; 
                 font-size: 12px; 
                 background-color: #f9f9f9; 
                 border: 1px solid #D0D0D0; 
                 color: #002166; 
                 display: block; 
                 margin: 14px 0 14px 0; 
                 padding: 12px 10px 12px 10px;">
	<?php echo $first_name.' '.$last_name; ?> &middot; 
	<?php echo anchor('site/members_area', 'Dashboard'); ?> | 
	<?php echo anchor('site/profile/'.$id, 'Profile'); ?> | 
    <?php echo anchor('site/messages/'.$id, 'Messages'); ?> | 
	<?php echo anchor('login/logout', 'Logout'); ?>
</code>
