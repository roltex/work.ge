<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Edit Section
if (isset($_POST['doEdit'])) {

	// Grab Variables

	$name = extractPost('name');
	$description = extractPost('description');
	$slug = extractPost('slug');
	$parent_id = (int) extractPost('parent_id');
	$type = (int) extractPost('type');
	$active = extractPost('active');
	$style = (int)extractPost('style');
	if (get_magic_quotes_gpc()) {
		$name = stripslashes($name);
		$description = stripslashes($description);
	}
	
	$menu_types = extractPost('menu_type');
	
	if (!is_array($menu_types)) {
		$menu_types = array($menu_types);
	}
	
	if (strlen($name) > 0) {
   		
   		// Generate Slug
   		$generated_slug = generateSlug($database_link, $slug, $parent_id, $content_language);
   		
   		// Updating
   		
   		$update_query = "UPDATE
   							`bc_sections`
   								SET
   							`name` = '" . DBM::escape($name) . "',
   							`description` = '" . DBM::escape($description) . "',
   							`parent_id` = '" . $parent_id . "',
   							`slug` = '" . $generated_slug . "',
   							`active` = '" . DBM::escape($active) . "',
							`style` = '".DBM::escape($style)."'
   								WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
		
		
		$get_id = "SELECT `id` FROM `bc_sections` WHERE `pk` = " . $pk;
		
		if($result = DBM::query($get_id, $database_link)){
			
			$item = DBM::fetchObject($result);
		
			$update_query = "UPDATE
   							`bc_sections`
   								SET
   							`type` = '" . $type . "'
   								WHERE
   							`id` = " . $item->id;
   		
   			DBM::query($update_query, $database_link);
		}
		
   		// Insert Menu Types
   		
   		$delete_menus_query = "DELETE FROM
   								`bc_section_to_menu`
   									WHERE
   								`section_pk` = " . $pk;
   		
   		$delete_menus_result = DBM::query($delete_menus_query);
   	
   		foreach ($menu_types as $mKey => $mVal) {
	   		
	   		$menuID = (int) trim($mVal);
	   		
	   		if ($menuID > 0) {
	   			
	   			$insert_menus_query = "INSERT INTO
	   								`bc_section_to_menu`
	   									SET
	   								`section_pk` = " . $pk . ",
	   								`menu_id` = " . $menuID;
	   			
	   			DBM::query($insert_menus_query, $database_link);
	   				
	   		}
	   			
	   	}	
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

// Get Data for Current Section
$get_section_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`style`,
					`bc_sections`.`sort`
						FROM
					`bc_sections`
						WHERE
					`bc_sections`.`pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);

$slug_array = explode('/', $get_section_data->slug);

$real_slug = end($slug_array);

?>

<div class="panel-heading">
	<h5 class="panel-title"><?php echo $TRANSLATION['edit_page']; ?></h5>
	<div class="heading-elements">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">
			<?php echo $TRANSLATION['back']; ?>
		</a>	
	</div>
</div>
	
<form class="form-horizontal" method="post">	
	
	<div class="panel-body">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['name']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="name" value="<?php echo $get_section_data->name;?>" placeholder="name"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['description']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="description" value="<?php echo $get_section_data->description; ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label">URL:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="slug" value="<?php echo $real_slug; ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['parent']; ?>:</label>
				<div class="col-lg-9">
					<select class="select" name="parent_id">
						<option value="0">- - - - - - - </option>
						<?php			
					echo structureInCombobox($database_link, 0, $content_language, 0, $get_section_data->parent_id, array($get_section_data->id));					
						?>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['type']; ?>:</label>
				<div class="col-lg-9">
					<select class="select" name="type" id="type">
						<option value="0">- - - - - - - </option>
						<?php			
							echo typesInCombobox($database_link, $get_section_data->type);					
						?>
					</select>
				</div>
			</div>
			<?php
				
				$string = file_get_contents("js/templates.json");
				$json_a = json_decode($string, true);
				$templates = $json_a['widget'][$get_section_data->type]['templates'];
				
			?>
			<div class="form-group" id="style_wrapper">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['style']; ?>:</label>
				<div class="col-lg-9" id="style">
				<?php 
				if(is_array($templates)) {
					foreach($templates as $key => $value){
						echo '
						<label class="radio-inline">
							<input type="radio" class="styled" name="style" value="'.$key.'"'.is_checked($key, $get_section_data->style).'/>
							<i class="'.$value['className'].'"></i>'.$value['description'].'
						</label>';
						}
					} 
				?>
				
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['menu']; ?>:</label>
				<div class="col-lg-9">
					<?php
					echo menusInCheckboxes($database_link, $pk);
					?>
				</div>
			</div>		
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['active']; ?>:</label>
				<div class="col-lg-9">
					<label class="radio-inline">
						<input type="radio" class="styled" name="active" value="Y"<?php echo is_checked('Y', $get_section_data->active);?>/>
						<?php echo $TRANSLATION['yes']; ?>
					</label>
					<label class="radio-inline">
						<input type="radio" class="styled" name="active" value="N"<?php echo is_checked('N', $get_section_data->active);?>/>
						<?php echo $TRANSLATION['no']; ?>
					</label>
				</div>
			</div>
			
			<div class="text-right">
				<button type="submit" name="doEdit" class="btn btn-primary">
					<?php echo $TRANSLATION['save']; ?> <i class="icon-arrow-right14 position-right"></i>
				</button>
			</div>
		</div>
	</div>

</form>			
								

