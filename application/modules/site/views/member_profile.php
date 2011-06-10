	<?php echo modules::run('login/cp');?>
    <?php if( isset($notice) ): ?>
    <h2>Member Profile Pages</h2>
    <p><?php echo $notice; ?></p>
    <?php else: ?>
	<h2><?php echo $first_name; ?>'s Profile</h2>
     <p>Put all the good wholesome profile info here!</p>
	<?php endif; ?>