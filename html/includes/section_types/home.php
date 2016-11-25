<?php

$banner4 = banners($siteData['language'], $type = 4, 'RAND()');
$banner5 = banners($siteData['language'], $type = 5);


$query = "SELECT 
				`bc_info`.`slug` AS `info_slug`,
				`bc_info`.`title`,
				`bc_info`.`thumbnail`,
				`bc_info`.`description`,
				`bc_info`.`start_date`,
				`bc_sections`.`slug` AS `section_slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`language` = '".$siteData['language']."' AND 
				`bc_sections`.`language` = `bc_info`.`language` AND 
				`bc_info`.`section_id` = `bc_sections`.`id` AND 
				`bc_info`.`important_type` = 1
			ORDER BY `bc_info`.`start_date` DESC 
			LIMIT 4";

if($result = DBM::queryData($query, $database_link)) {

	while($row = DBM::fetchArray($result)) {
		
		$row['date'] = datemutation($row['start_date'], $language);
		$row['description'] = trim_text($row['description'], $language['char_size']*100);
	
		$news_1[] = $row;
	}
}

$query = "SELECT 
				`bc_info`.`slug` AS `info_slug`,
				`bc_info`.`title`,
				`bc_info`.`thumbnail`,
				`bc_info`.`description`,
				`bc_info`.`start_date`,
				`bc_sections`.`slug` AS `section_slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`language` = '".$siteData['language']."' AND 
				`bc_sections`.`language` = `bc_info`.`language` AND 
				`bc_info`.`section_id` = `bc_sections`.`id` AND 
				`bc_info`.`important_type` = 2
			ORDER BY `bc_info`.`start_date` DESC 
			LIMIT 2";

if($result = DBM::queryData($query, $database_link)) {

	while($row = DBM::fetchArray($result)) {
		
		$row['date'] = datemutation($row['start_date'], $language);
	
		$news_2[] = $row;
	}
}



$query = "SELECT 
				`bc_info`.`slug` AS `info_slug`,
				`bc_info`.`title`,
				`bc_info`.`thumbnail`,
				`bc_info`.`description`,
				`bc_info`.`start_date`,
				`bc_sections`.`name`,
				`bc_sections`.`slug` AS `section_slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`language` = '".$siteData['language']."' AND 
				`bc_sections`.`language` = `bc_info`.`language` AND 
				`bc_info`.`section_id` = `bc_sections`.`id` AND 
				`bc_info`.`important_type` = 4
			ORDER BY `bc_info`.`start_date` DESC 
			LIMIT 2";

if($result = DBM::queryData($query, $database_link)) {

	while($row = DBM::fetchArray($result)) {
		
		$row['date'] = datemutation($row['start_date'], $language);
	
		$news_3[] = $row;
	}
}

$smarty->assign('banner4', $banner4);
$smarty->assign('banner5', $banner5);
$smarty->assign('news_1', $news_1);
$smarty->assign('news_2', $news_2);
$smarty->assign('news_3', $news_3);

$siteData['section_img'] = '';

//meta tags info
$og_array = array(		
				'title' => $language['website_title'],
				'description' => $siteData['section_description'],
				'thumbnail' => $siteData['section_img'],
				'id' => $siteData['section']
			);
									
$smarty->assign('og_array', $og_array);

$smarty->assign('content_file', 'main_page.tpl');
$smarty->assign('page_class', 'home');

?>