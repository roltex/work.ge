<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Get Data for Current Section
$get_section_query = "SELECT * FROM
						`bc_banner`
							WHERE
						`bc_banner`.`pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);



// Edit Section
if (isset($_POST['doEdit'])) {

	// Grab Variables

	$title = extractPost('title');
	$url = extractPost('url');
	$active = extractPost('active');
	$type = extractPost('type');
	$target = extractPost('target');
	$photo_to_language = extractPost('photo_to_language');
	
	if ($_FILES['file']['name'] != '') {
		
		$file = rand(1000,9999) . $_FILES['file']['name'];
		$file = str_replace(' ', '', $file);
		$upload = move_uploaded_file($_FILES['file']['tmp_name'], $config['fpath'] . $file);
		
		if($photo_to_language) {
			
			@unlink($config['fpath'] . $get_section_data->file);
			$update_query = "UPDATE	`bc_banner` SET	`file` = '" . DBM::escape($file) . "' WHERE	`id` = " . $get_section_data->id; 
			
		} else
		
			$update_query = "UPDATE	`bc_banner` SET	`file` = '" . DBM::escape($file) . "' WHERE	`id` = " . $get_section_data->id ." AND `language` = '".$content_language."'"; 
		  		
   		DBM::query($update_query, $database_link);
		
	}
	
	if (strlen($url) > 0) {
   		   		
   		// Updating
		
   		$update_query = "UPDATE
   							`bc_banner`
   								SET
   							`title` = '" . DBM::escape($title) . "',
   							`url` = '" . DBM::escape($url) . "',
   							`active` = '" . DBM::escape($active) . "',
							`target` = '" . DBM::escape($target) . "',
							`type` = '". DBM::escape($type) ."'
   								WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

$file = '<img src="'. $config['fpath'] . $get_section_data->file .'" width="150"/>';

$slug_array = explode('/', $get_section_data->slug);

$real_slug = end($slug_array);

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['edit_banner']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_edit_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['file']; ?></th>
				<td>
                	<table><tr>
                    	<td><?php echo $file; ?></td>
                        <td><input type="file" name="file" /></td>
                        <td><label><input type="checkbox" name="photo_to_language" checked="checked"/> <?php echo $TRANSLATION['displayed_other_languages']; ?></label></td>
                    </tr></table>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['url']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge" value="<?php echo $get_section_data->url; ?>" />
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['target']; ?></th>
				<td>
                	<select name="target">
                    	<option value="_blank" <?php echo dropDown('_blank', $get_section_data->target); ?> ><?php echo $TRANSLATION['new_tab']; ?></option>
                        <option value="_self" <?php echo dropDown('_self', $get_section_data->target); ?> ><?php echo $TRANSLATION['same_tab']; ?></option>
					</select>
				</td>
				
			</tr>
            			
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['type']; ?></th>
                <td>
                <select name="type">			
				<?php
                $get_settings_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'banner_type' ORDER BY `value`";
							
                if ($get_settings_result = DBM::queryData($get_settings_query)){
                    
					while ($get_settings_data = DBM::fetchObject($get_settings_result))
                    
					    echo '<option value="'.$get_settings_data->value.'" '.dropDown($get_section_data->type, $get_settings_data->value).'>
									'.$get_settings_data->description.'
							</option>';
                    }
                ?>
            	</select>
                </td>
            </tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('title', $get_section_data->title, 'basic', 200); ?>
				</td>
				
			</tr>
            
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
				<td>
					<select name="active">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->active); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_section_data->active); ?>><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>