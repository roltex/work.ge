<?php

// Add Section
if (isset($_POST['doAdd'])) {

	// Grab Variables	
	
	$name = extractPost('name');
	$description = extractPost('description');
	$slug = extractPost('slug');
	$parent_id = (int) extractPost('parent_id');
	$type = (int) extractPost('type');
	$active = extractPost('active');
	$style = (int)extractPost('style');
	$family = (int)extractPost('family');
	if (get_magic_quotes_gpc()) {
		$name = stripslashes($name);
		$description = stripslashes($description);
	}
	
	$menu_types = extractPost('menu_type');
	
	if (!is_array($menu_types)) {
		$menu_types = array($menu_types);
	}
	
	if (strlen($name) > 0) {
	
   		// Selecting Max Section ID
   		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_sections`";
   		
   		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_section_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_section_id = 0;
   			
   		}
   		
   		// Get Next ID
   		$real_section_id = $max_section_id + 1;
   		
   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {
   		
   			// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_sections` WHERE `parent_id` = '" . DBM::escape($parent_id) . "' AND `language` = '" . $val . "'";
   			
   			if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
   			
   				$max_sort_data = DBM::fetchObject($max_sort_result);
   				
   				$max_sort = $max_sort_data->max_sort;
   				
   			} else {
   			
   				$max_sort = 0;
   				
   			}
   			
   			$real_sort = $max_sort + 1;
   			
   			// Generating Name
   			if ($val != $content_language) {
   				$real_name = $name . ' (' . $val . ')';
   			} else {
	   			$real_name = $name;
   			}
   			
   			// Generate Slug
   			$generated_slug = generateSlug($database_link, $slug, $parent_id, $val);
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`bc_sections`
   									SET
   								`id` = " . $real_section_id . ",
   								`name` = '" . DBM::escape($real_name) . "',
   								`description` = '" . DBM::escape($description) . "',
   								`language` = '" . $val . "',
   								`parent_id` = '" . $parent_id . "',
   								`slug` = '" . $generated_slug . "',
   								`type` = " . $type . ",
   								`active` = '" . DBM::escape($active) . "',
								`style` = '".DBM::escape($style)."',
								`family` = '".DBM::escape($family)."',
   								`sort` = " . $real_sort . "";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
   			
   			// Insert Menu Types
   			
   			if ($insert_id > 0) {
   			
	   			foreach ($menu_types as $mKey => $mVal) {
	   				
	   				$menuID = (int) trim($mVal);
	   				
	   				if ($menuID > 0) {
	   					
	   					$insert_menus_query = "INSERT INTO
	   										`bc_section_to_menu`
	   											SET
	   										`section_pk` = " . $insert_id . ",
	   										`menu_id` = " . $menuID;
	   					
	   					DBM::query($insert_menus_query, $database_link);
	   					
	   				}
	   				
	   			}
	   			
	   		}	
   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

?>
<div class="panel-heading">
	<h5 class="panel-title"><?php echo $TRANSLATION['add_page']; ?></h5>
	<div class="heading-elements">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-warning">
			<?php echo $TRANSLATION['back']; ?>
		</a>	
	</div>
</div>

<form name="section_add_form" class="form-horizontal" method="post" action="">
	
	<input type="hidden" class="form-control" name="family" value="1"/>
	
	<div class="panel-body">
		<div class="col-lg-5">
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['name']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="name" placeholder="example name"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['description']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="description" placeholder="example description"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label">URL:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="slug" placeholder="example-name"/>
				</div>
			</div>
			
			<div class="form-group hidden">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['parent']; ?>:</label>
				<div class="col-lg-9">
					<select class="select" name="parent_id">
						<option value="0">- - - - - - - </option>
						<?php			
					echo structureInCombobox($database_link, 0, $content_language, 0, 0, 0, 1);					
						?>
					</select>
				</div>
			</div>
			
			<div class="form-group hidden">
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
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['active']; ?>:</label>
				<div class="col-lg-9">
					<label class="radio-inline">
						<input type="radio" class="styled" name="active" value="Y"/>
						<?php echo $TRANSLATION['yes']; ?>
					</label>
					<label class="radio-inline">
						<input type="radio" class="styled" name="active" value="N"/>
						<?php echo $TRANSLATION['no']; ?>
					</label>
				</div>
			</div>
			
			<div class="text-right">
				<button type="submit" name="doAdd" class="btn btn-primary">
					<?php echo $TRANSLATION['save']; ?> <i class="icon-arrow-right14 position-right"></i>
				</button>
			</div>
	
		</div>
        
        <div class="col-lg-2"> </div> 
        <div class="col-lg-5">        	
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['cover']; ?>:</label>
				<div class="col-lg-9">
					<input type="file" name="cover"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['logo']; ?>:</label>
				<div class="col-lg-9">
					<input type="file" name="logo"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['staff_count']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="staff_count" placeholder="500-1000 თანამშრომელი"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['website']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="website" placeholder="http://www.example.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['linkedin']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="linkedin" placeholder="http://www.linkedin.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['facebook']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="facebook" placeholder="http://www.facebook.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['twitter']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="twitter" placeholder="http://www.twitter.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['instagram']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="instagram" placeholder="http://www.instagram.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['youtube']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="youtube" placeholder="http://www.youtube.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['pinterest']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="pinterest" placeholder="http://www.pinterest.com/"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['email']; ?>:</label>
				<div class="col-lg-9">
					<input type="email" class="form-control" name="email" placeholder="fullname@example.com"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['phone']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="phone" placeholder="551123456"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['career_page']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="career_page" placeholder="http://example.com"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['address']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="address" placeholder="example str. 57"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['lng']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="lng" placeholder="43.987456"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['lat']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="lat" placeholder="42.7895462"/>
				</div>
			</div>
            
        </div>
        
        <div class="col-lg-10">  
			
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['about_text']; ?>:</label>
				<div class="col-lg-9">
					<?php echo getEditor('about_text', $content, 'full', 400); ?>
				</div>
			</div>
        </div>
	</div>
</form>