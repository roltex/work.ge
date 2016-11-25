<?php
$section_id = extractGet('section_id');

if(!($paging = extractGet('paging'))) $paging = 1;

$per_page = 25;

$limit = ($paging - 1) * $per_page;


if(isset($_GET['send_news'])) {
	
	$send_news = (int)extractGet('send_news');
	$settings = current(settings('no_reply'));
	$no_reply_email = $settings->value;

	$query = "SELECT 
					`info`.`id`,
					`info`.`title`,
					`info`.`description`,
					`info`.`content`,
					`info`.`info_slug`,
					`info`.`section_slug`,
					`info`.`start_date`,
					`bc_subscribers`.`id` AS `user_id`,
					`bc_subscribers`.`email`,
					`bc_subscribers`.`language` 
				FROM 
					`bc_subscribers` 
				LEFT JOIN (SELECT 
								`bc_info`.`id`, 
								`bc_info`.`title`,
								`bc_info`.`description`,
								`bc_info`.`content`,
								`bc_info`.`language`,
								`bc_info`.`start_date`,
								`bc_info`.`slug` AS `info_slug`,
								`bc_sections`.`slug` AS `section_slug`					
							FROM `bc_info`, `bc_sections` 
							WHERE `bc_info`.`section_id` = `bc_sections`.`id` AND 
								`bc_info`.`language` = `bc_sections`.`language` AND 
								`bc_info`.`id` = ".$send_news." 
							) AS `info`
					ON `bc_subscribers`.`language` = `info`.`language` 
				WHERE `info`.`id` = ".$send_news."";
	
	if($result = DBM::queryData($query, $database_link)) {
	
		while($row = DBM::fetchObject($result)) {
			
			$subject = $row->title;
		
			if(check_email($row->email) && $subject) {
				
				$email = $row->email;
		
				$message = '<h2><a href="'.$config['site_address'].$row->language.'/'.$row->section_slug.'/'.$row->info_slug.'">'.$subject.'</a></h2>'.$row->content.'<br/><a href="'.$config['site_address'].$row->language.'/subscribe?action=stop&key='.sha1($row->user_id).'&email='.$email.'">Unsubscribe</a>';
			
				if(send_mail($email, $no_reply_email, $subject, $message, $files)){
					
				} else '<h3>Error! Try Again</h3>';
			
			}
		}
		
		$update_query = "INSERT INTO `bc_sent_info` SET `info_id` = '".DBM::escape($send_news)."', `sent_date` = '".date('Y-m-d H:i:s')."'";
		
		DBM::query($update_query);
		
		header('location: ?page=' . $current_page_id . '&act=list&language=' . $content_language.'&section_id='.$section_id);
   		
   		die();
	}
}

?>

<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['current_posts']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
			<?php echo $TRANSLATION['page']; ?> - 
            <select name="section_id" onchange="location.href='<?php echo '?page='.$page.'&language='.$content_language.'&act=list&section_id='; ?>'+this.value">
				<?php
				
				echo getSectionsByType($section_type, $content_language, $database_link, $section_id);
				
				?>
			</select>
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="doAddInfo" value="+ <?php echo $TRANSLATION['new_post']; ?>" class="btn btn-info" />
		</form>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th><?php echo $TRANSLATION['title']; ?></th>
			<th><?php echo $TRANSLATION['date']; ?></th>
			<th><?php echo $TRANSLATION['page']; ?></th>
			<th><?php echo $TRANSLATION['subscribed']; ?></th>
			<th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT
							`bc_info`.`pk`,
							`bc_info`.`id`,
							`bc_info`.`section_id`,
							`bc_info`.`language`,
							`bc_info`.`title`,
							`bc_info`.`description`,
							`bc_info`.`content`,
							`bc_info`.`start_date`,
							`bc_info`.`end_date`,
							`bc_info`.`thumbnail`,
							`bc_info`.`published`,
							`bc_sections`.`name`,
							`bc_sent_info`.`info_id`
						FROM
							`bc_info`
						LEFT JOIN
							`bc_sections`
						ON
							`bc_sections`.`id` = `bc_info`.`section_id` AND
							`bc_sections`.`language` = `bc_info`.`language`
						LEFT JOIN 
							`bc_sent_info`
						ON 
							`bc_sent_info`.`info_id` = `bc_info`.`id`
						WHERE
							`bc_info`.`section_id` = ".$section_id." AND
							`bc_sections`.`type` = ".$section_type." AND
							`bc_sections`.`language` = '" . $content_language . "'
						ORDER BY
							`bc_info`.`start_date` DESC
						LIMIT ".$limit.",".$per_page." ";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
			
			echo '<tr>';
			
			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->start_date . '</td>';
			echo '<td>' . $get_pages_data->name . '</td>';
			echo '<td>';
			if($get_pages_data->id != $get_pages_data->info_id)
			echo '<a href="?page='.$page.'&section_id='.$section_id.'&language='.$content_language.'&act=list&send_news='.$get_pages_data->id.'" class="btn btn-success">'.$TRANSLATION['send_mail'].'</a>';
			echo '</td>';
			echo '<td><a href="?page=' . $current_page_id . '&act=edit&language=' . $get_pages_data->language . '&section_id=' . $get_pages_data->section_id . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			echo '<td><a href="?page=' . $current_page_id . '&act=delete&language=' . $get_pages_data->language . '&section_id=' . $get_pages_data->section_id . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';
			
			echo '</tr>';
			
		}
		
		
		
		
	}
		
	$get_pages_query = "SELECT
							`bc_info`.`pk`
						FROM
							`bc_info`
						LEFT JOIN
							`bc_sections`
						ON
							`bc_sections`.`id` = `bc_info`.`section_id` AND
							`bc_sections`.`language` = `bc_info`.`language`
						WHERE
							`bc_info`.`section_id` = ".$section_id." AND
							`bc_sections`.`type` = ".$section_type." AND
							`bc_sections`.`language` = '" . $content_language . "'
						ORDER BY
							`bc_info`.`start_date` DESC";
						
	if ($get_pages_result = DBM::queryData($get_pages_query)){
		
		$count = DBM::numRows($get_pages_result);
	}
	
	?>
	
	</tbody>
	
</table>
<hr />

<?php

for($i = 1; $i <= ceil($count/$per_page); $i++){
			echo '<a href="?page=' . $current_page_id . '&act=list&language=' . $content_language . '&section_id=' . $section_id . '&paging=' . $i . '" class="btn btn-mini btn-warning margin">'.$i.'</a>';
	}
	
?>