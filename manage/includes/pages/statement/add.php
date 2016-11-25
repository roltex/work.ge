<?php

$section_id = extractGet('section_id');
$active_language = extractGet('language');


date_default_timezone_set('Asia/Tbilisi');
$date = date('Y-m-d');
// Add Section
if (isset($_POST['doAdd'])) {

	// Grab Variables	
	
	$name= extractPost('name');
	$vacant_saats = extractPost('vacant_saats');
	$text = extractPost('text');
	$work_rate = extractPost('work_rate');
	$town = extractPost('town');
	$category = extractPost('category');
	$experience = extractPost('experience');
	$education = extractPost('education');
	$pwd = extractPost('pwd');
	$students = extractPost('students');
	$price = extractPost('price');
	$min_price = extractPost('min_price');
	$max_price = extractPost('max_proce');
	$currency = extractPost('currency');
	$end_date = extractPost('end_date');
	$start_date = extractPost('start_date');

	
	
	
	if (strlen($name) > 0) {
   		// Selecting Max Section ID
   		$max_id_query = "SELECT MAX(`adv_id`) AS `max_id` FROM `statement`";
   		
   		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {

   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_parent_id = $max_id_data->max_id;
   			
   		} else {
   			$max_parent_id = 0;
   			
   		}
   		$real_parent_id = $max_parent_id + 1;


   		
   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {

   			// Generating Name
   			if ($val != $active_language) {
   				$real_name = $name . ' (' . $val . ')';
   				$real_text = $text . ' (' . $val . ')';
   			} else {
	   			$real_name = $name;
	   			$real_text = $text;
   			}
   		
   			$query = "SELECT `name`,`language` FROM `bc_sections` WHERE `id` = '$section_id' AND `language` = '$val'";
   		
		   		if ($result = DBM::queryData($query, $database_link)) {

		   			$row = DBM::fetchObject($result);
		   			
		   			$company_name = $row->name;
		   		}
   			// Generate Slug
   			//$generated_slug = generateSlug($database_link, $slug, $parent_id, $val);
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`statement`
   									SET
   								`adv_id` = " . $real_parent_id . ",
   								`company_id` = " . $section_id . ",
   								`company_name` = '" . $company_name . "',
   								`name` = '" . $real_name . "',
   								`language` = '" . $val . "',
   								`vacant_seats` = '" . $vacant_saats . "',
   								`description` = '" . $real_text . "',
   								`town` = '" . $real_town . "',
   								`work_rate` = '" . $work_rate . "',
   								`category` = '" . $category . "',
   								`experience` = '" . $experience . "',
   								`education` = '" . $education . "',
   								`pwd` = '" . $pwd . "',
   								`students` = '" . $students . "',
   								`salary` = '" . $price . "',
   								`salary_min` = '" . $min_price . "',
   								`salary_max` = '" . $max_proce . "',
   								`currency` = '" . $currency . "',
   								`start_date` = '" . $start_date . "',
   								`end_date` = '" . $end_date . "',
   								`add_time` = '" . $date . "'";
   								echo '</br>';
   		
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
   			
   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $active_language);
   		
   		die();
   	
   	}
   	
}
//

?>
<!-- Vertical form options -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h4 class="panel-title"><?php echo $TRANSLATION['add new statement']; ?></h4>
		<div class="heading-elements">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-warning">
			<?php echo $TRANSLATION['back']; ?>
		</a>	
	</div>
	</div>
	<form  method="post" action="">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label><?php echo $TRANSLATION['name']; ?>:</label>
						<input type="text" class="form-control"  name="name">
					</div>
				</div>
			</div>
			
			<div class="form-group">
					<?php echo getEditor('about_text', $content, 'full', 400); ?>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label><?php echo $TRANSLATION['vacant seats']; ?>:</label>
						<input type="text" value="0" class="touchspin-vertical input-lg" name="vacant_saats">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label><?php echo $TRANSLATION['work rate']; ?>:</label>
				<select data-placeholder="" class="select" name="work_rate">
					<option></option>
				    <option value="Full time">Full time</option>
				    <option value="Part time">Part time</option> 
				    <option value="Free Schedule">Free Schedule</option>
				</select>
			</div>

			<div class="form-group">
				<label><?php echo $TRANSLATION['location']; ?>:</label>
				<select multiple="multiple" data-placeholder="" class="select" name="location">
					<option value=""></option>
					<option value="1">Tbilisi</option>
					<option value="2">Kutaisi</option>
					<option value="3">Batumi</option>
				</select>
			</div>

			<div class="form-group">
				<label><?php echo $TRANSLATION['category']; ?>:</label>
				<select data-placeholder="" class="select" name="category">
				    <option value=""></option> 
				    <option value="IT, Internet, Telecom">IT, Internet, Telecom</option> 
				    <option value="Accounting, Management Accounting, Corporate Finance">Accounting, Management Accounting, Corporate Finance</option> 
				    <option value="Marketing, Advertising, PR">Marketing, Advertising, PR</option> 
				    <option value="Administrative Personnel">Administrative Personnel</option> 
				</select>
			</div>

			<div class="form-group">
				<label><?php echo $TRANSLATION['education']; ?>:</label>
				<select data-placeholder="" class="select" name="education">
					<option value=""></option>
				    <option value="incomplete">incomplete</option>
				    <option value="secondary">secondary</option> 
				    <option value="Bachelor">Bachelor</option> 
				    <option value="Master">Master</option> 
				    <option value="Aspirant">Aspirant</option> 
				   
				</select>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label><?php echo $TRANSLATION['experience']; ?>:</label>
						<input type="text" value="0" class="touchspin-vertical input-lg" name="experience">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" class="control-primary" name="pwd">
								<?php echo $TRANSLATION['pwd']; ?>
							</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" class="control-primary" name="students">
								<?php echo $TRANSLATION['students']; ?>
							</label>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="display-block"><?php echo $TRANSLATION['salary']; ?></label>
				<label class="radio-inline">
					<input type="radio" class="styled" name="gender" checked="checked" id="s_fix">
					<?php echo $TRANSLATION['fixed']; ?>
				</label>

				<label class="radio-inline">
					<input type="radio" class="styled" name="gender" id="s_range">
					<?php echo $TRANSLATION['by_range']; ?>
				</label>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-6" id="show_fix">
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Price" name="price">
						</div>
						<div class="col-md-4">
							<select class="select" name="currency">
								<option value="1">GEL</option>
								<option value="2">USD</option>
								<option value="3">EUR</option>
							</select>
						</div>
					</div>

					<div class="col-md-6" style="display: none;" id="show_range">
						<div class="panel panel-body border-top-danger">
							<div class="text-center">
								<h6 class="no-margin text-semibold"><?php echo $TRANSLATION['by_range']; ?></h6>
							</div>

							<div id="ion-range"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-6">
						<div class="content-group-lg">
							<h6 class="text-semibold"><?php echo $TRANSLATION['publication_date']; ?>:</h6>
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-calendar5"></i></span>
								<input type="text" class="form-control pickadate" placeholder="" name="start_date">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-group-lg">
							<h6 class="text-semibold"><?php echo $TRANSLATION['deadline']; ?>:</h6>
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-calendar5"></i></span>
								<input type="text" class="form-control pickadate" placeholder="" name="end_date">
							</div>
						</div>
					</div>
				</div>
			</div>
											
			<div class="text-right">
				<button type="submit" name="doAdd" class="btn btn-primary"><?php echo $TRANSLATION['add_statement']; ?> <i class="icon-arrow-riposition-right"></</button>
			</div>
		</div>
	</form>
</div>
<!-- /vertical form options -->
<script>
	$('input[name=gender]').click(function () {
    if (this.id == "s_range") {
    	$("#show_fix").hide('slow');
        $("#show_range").show('slow');
    } else {
        $("#show_range").hide('slow');
        $("#show_fix").show('slow');
    }
});
</script>