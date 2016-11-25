<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');


$page = extractGet('page');
?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['subscribers']; ?></h3>
	
	    <hr />

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/subscribers/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/subscribers/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/subscribers/delete.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/subscribers/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/subscribers/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	
	    </div>
	    
	</div>
      
</div> <!-- /container -->