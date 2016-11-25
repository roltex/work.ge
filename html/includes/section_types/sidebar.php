<?php
	
	$slider_decor = rand(1,4).'.png';
	$right_menu = build_menu_by_id($database_link, $firstSection['id'], $siteData['language'], 3, 0);
	//banners
	$slider_banners = banners($siteData['language'], $type = 1);
	$banner2 = banners($siteData['language'], 2);
	$banner3 = banners($siteData['language'], 3);
	$banner6 = banners($siteData['language'], 6, 'RAND()');
	
	$query = "SELECT * FROM `bc_sections` WHERE `type` = 5 AND `language` = '".$siteData['language']."'";
	
	if($result = DBM::queryData($query, $database_link)) {
		
		$row = DBM::fetchObject($result);
	}
	
	
	$smarty->assign('contact_slug', $row->slug);
	$smarty->assign('slider_decor', $slider_decor);
	$smarty->assign('banner2', $banner2);
	$smarty->assign('banner3', $banner3);
	$smarty->assign('banner6', $banner6);
	$smarty->assign('right_menu', $right_menu);
	$smarty->assign('slider_banners', $slider_banners);
	
?>