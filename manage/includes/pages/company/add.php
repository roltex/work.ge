<?php
date_default_timezone_set('Asia/Tbilisi');
$date = date('Y-m-d');
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

	$cover = extractPost('cover');
	$logo = extractPost('logo');
	$staff_count = extractPost('staff_count');
	$website = extractPost('website');
	$linkedin = extractPost('linkedin');
	$facebook = extractPost('facebook');
	$twitter = extractPost('twitter');
	$instagram = extractPost('instagram');
	$youtube = extractPost('youtube');
	$pinterest = extractPost('pinterest');
	$email = extractPost('email');
	$phone = extractPost('phone');
	$career_page = extractPost('career_page');
	$address = extractPost('address');
	$lng = extractPost('lng');
	$lat = extractPost('lat');

	
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

   		foreach ($_POST['employment'] as $selectedOption){


   		$empl_query = "INSERT INTO
   								`company_to_sphere`
   									SET
   								`empl_id` = " . $real_section_id . ",
   								`name` = '" . DBM::escape($selectedOption) . "'";
   			
   			DBM::query($empl_query, $database_link);
   			
   			//$insert_id = DBM::insertID($database_link);
		}	
   		$company_info_query = "INSERT INTO
   								`company_info`
   									SET
   								`section_id` = " . $real_section_id . ",
   								`staff_count` = '" . DBM::escape($staff_count) . "',
   								`website` = '" . DBM::escape($website) . "',
   								`linkedin` = '" . DBM::escape($linkedin) . "',
   								`facebook` = '" . DBM::escape($facebook) . "',
   								`twitter` = '" . DBM::escape($twitter) . "',
								`instagram` = '".DBM::escape($instagram)."',
								`youtube` = '".DBM::escape($youtube)."',
								`pinterest` = '".DBM::escape($pinterest)."',
								`email` = '".DBM::escape($email)."',
								`phone` = '".DBM::escape($phone)."',
								`career_page` = '".DBM::escape($career_page)."',
								`lng` = '".DBM::escape($lng)."',
								`lat` = '".DBM::escape($lat)."',
								`about_text` = '".DBM::escape($about_text)."',
								`date` = '".DBM::escape($date)."'";
   			
   			DBM::query($company_info_query, $database_link);
    
   		
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
		<div class="col-md-12">
			<div class="col-md-10">
				<div class="form-group">
					<input id="pac-input" class="controls" type="text" placeholder="ძებნა">
					<div id="drop-container"></div> 
					<div id="mapCanvas" style="width:100%;height:350px"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">	
					<div id="infoPanel">
						<b>სტატუსი:</b>
						<div id="markerStatus"><i>დასვით მარკერი პოზიციაზე</i></div>
						<b>გრძედი: განედი:</b>
						<div id="info"></div>
					</div>
					<input type="text" placeholder="გრძედი" name="lng" id="lng" class="form-control" value="<?php echo $lng; ?>"/>
					<input type="text" placeholder="განედი" name="lat" id="lat" class="form-control" value="<?php echo $lat; ?>"/>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
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
				<label class="col-lg-3 control-label">employment:</label>
				<div class="col-lg-9">
					<select multiple="multiple" data-placeholder="Enter tags" class="select" name="employment[]">
							<option value="1" name="Automotive">Automotive</option>
							<option value="2" name="Children. Family">Children. Family</option>
							<option value="3" name="Banks & Finance">Banks & Finance</option>
							<option value="4" name="Jurisprudence">Jurisprudence</option>
							<option value="5" name="Science & Education">Science & Education</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['staff_count']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="staff_count" placeholder="500-1000 თანამშრომელი"/>
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
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['website']; ?>:</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="website" placeholder="http://www.example.com/"/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['cover']; ?>:</label>
				<div class="col-lg-9">
					<input type="file" name="cover"/>
				</div>
			</div>
		</div>

        <div class="col-lg-6">
				
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
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['logo']; ?>:</label>
				<div class="col-lg-9">
					<input type="file" name="logo"/>
				</div>
			</div>
		</div>
        
        <div class="col-lg-12">
			<div class="form-group">
				<label class="col-lg-3 control-label"><?php echo $TRANSLATION['about_text']; ?>:</label>
				<div class="col-lg-12">
					<?php echo getEditor('about_text', $content, 'full', 400); ?>
				</div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="form-group">
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

        
	</div>
</form>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0JwK1emBC8olI5d8JyIkzY4DmTIhFcAs&signed_in=true&libraries=places"></script>
<script type="text/javascript">


var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
  
  document.getElementById('lng').value = latLng.lng();
  document.getElementById('lat').value = latLng.lat();
}

function updateMarkerAddress(str) {
  document.getElementById('address').value = str;
}


function initialize() {

  var markers = [];
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom:8
  });
  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(41.730, 41.730),
      new google.maps.LatLng(44.784, 44.784));
  map.fitBounds(defaultBounds);
  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  var searchBox = new google.maps.places.SearchBox(input);
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
		    var place = searchBox.getPlaces()[0];
		    markers = [];

		    var bounds = new google.maps.LatLngBounds();
		   
		   	
		     
			     		// Create a marker for each place.
			var marker = new google.maps.Marker({
					        map: map,
					        title: place.name,
							draggable: true,
					        position: place.geometry.location
					    });
			document.getElementById('lng').value = place.geometry.location.lng();
			document.getElementById('lat').value = place.geometry.location.lat();

			markers.push(marker);

			google.maps.event.addListener(marker, 'dragend', function() { 
				document.getElementById('lng').value = marker.position.lng();
				document.getElementById('lat').value = marker.position.lat();
			});

			bounds.extend(place.geometry.location);
		    		

		    map.fitBounds(bounds);

		    if (!place.geometry) return;
		    // If the place has a geometry, then present it on a map.
		    if (place.geometry.viewport) {
		      map.fitBounds(place.geometry.viewport);
		    } else {
		      map.setCenter(place.geometry.location);
		      map.setZoom(17);
		    }

  });

google.maps.event.addListener(map, 'bounds_changed', function() {
		    var bounds = map.getBounds();
		    searchBox.setBounds(bounds);
		});
  
  		// Update current position info.
		updateMarkerPosition(latLng);
		geocodePosition(latLng);
  
	    // Add dragging event listeners.
	    google.maps.event.addListener(marker, 'dragstart', function() {
	      updateMarkerAddress('Dragging...');
	    });
  
        google.maps.event.addListener(marker, 'drag', function() {
          updateMarkerStatus('Dragging...');
          updateMarkerPosition(marker.getPosition());
        });
  
        google.maps.event.addListener(marker, 'dragend', function() {
          updateMarkerStatus('Drag ended');
          geocodePosition(marker.getPosition());
        });
  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>