<?php

// Grab ID
$user_id = extractGet('user_id');

if (!($user_id > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Delete Current user
$query = "DELETE FROM `bc_subscribers` WHERE `bc_subscribers`.`id` = " . $user_id;

$result = DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
