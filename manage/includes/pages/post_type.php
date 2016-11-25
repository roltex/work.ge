<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');


?>

<div class="page-container">
	<!-- Page content -->
	<div class="panel panel-flat">
		

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/post_type/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/post_type/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/post_type/delete.php');
	        break;
	    case 'sort':
	        require_once(DIR_PATH . 'includes/pages/post_type/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/post_type/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/post_type/list.php');
	
}

?>
	</div>
</div>