<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['user_list']; ?></h4>
	</div>
	
</div>

<?php

$database_link = DBM::open($config['database']);

$get_user_query = "SELECT * FROM `bc_subscribers` ORDER BY `id` ASC";

if ($get_user_result = DBM::queryData($get_user_query)) {
	
	echo '<table class="table table-striped table-bordered">';
	
	echo '<thead>';
	
	echo '<tr>';
	
	echo '<th>ID</th>';
	echo '<th>'.$TRANSLATION['language'].'</th>';
	echo '<th>'.$TRANSLATION['email'].'</th>';
//	echo '<th>'.$TRANSLATION['edit'].'</th>';
	echo '<th>'.$TRANSLATION['delete'].'</th>';
	
	echo '</tr>';
	
	echo '</thead>';
	
	echo '<tbody>';
	
	while ($get_user_data = DBM::fetchObject($get_user_result)) {
		
		echo '<tr>';
		
		echo '<td>' . $get_user_data->id . '</td>';
		echo '<td>' . $get_user_data->language . '</td>';
		echo '<td>' . $get_user_data->email . '</td>';
		//echo '<td><a href="?page='.$page.'&language='.$content_language.'&act=edit&user_id='.$get_user_data->id. '"><i class="icon-edit"></i></a></td>';
		echo '<td><a href="?page='.$page.'&language='.$content_language.'&act=delete&user_id='.$get_user_data->id. '"><i class="icon-remove"></i></a></td>';
		
		echo '</tr>';
		
	}
	
	echo '</tbody>';
	
	echo '</table>';
	
}

?>

