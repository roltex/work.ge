<?php

if (isset($_GET['registration_done'])) {

	$notification[] = $language['registration_done'];
}

	
	if (isset($_POST['submit'])) {
		
		$registration_date = date('Y-m-d H:i:s');
		$name = extractPost('name');
		$email = trim(extractPost('email'));
		$age = extractPost('age');
		$phone = extractPost('tel');
		$region = extractPost('region');	
		
		if(!check_email($email)) {$error['email'] = $language['email_format_error'];}
		if($name == '') {$error['name'] = $language['name_error'];}
		if($age == '') {$error['age'] = $language['age_error'];}
		if($phone == '') {$error['phone'] = $language['phone_error'];}
		if($region < 1) {$error['region'] = $language['region_error'];}
		
		//check email unique	
		if( count($error) == 0 ) {
			
			$unique_query = "SELECT * FROM `bc_users` WHERE `email` = '".DBM::escape($email)."'";
			
			if($result = DBM::queryData($unique_query, $database_link)) {
			
				$row = DBM::numRows($result);
			} 
			
			if( $row > 0) $error['email_unique_error'] = $language['email_unique_error'];
			
		}
		
		if( count($error) == 0 ) {
		
			//register user
			
			$insert_query = "INSERT INTO 
										`bc_users`
									SET 
										`name` = '".DBM::escape($name)."',
										`email` = '".DBM::escape($email)."',
										`phone` = '".DBM::escape($phone)."',
										`age` = '".DBM::escape($age)."',
										`region` = '".DBM::escape($region)."',
										`registration_date` = '".DBM::escape($registration_date)."'
							";
			if( DBM::query($insert_query, $database_link) ) {
				
				$insert_user_id = DBM::insertID($database_link);
				
				//automatic email sending
				$subject = $language['registration_email_subject'];
				$no_reply_email = $setting_data['contact_email'];	
				$message = $setting_data['registration_email_body'];	
				
				if(send_mail($email, $no_reply_email, $subject, $message))	 {	
				
					$notification[] = $language['registration_email_sended_notice'];	
					$success['email'] = $language['mail_sended'];
				
				} else $warning['email_send_error'] = $language['resend_email'];
				
				
				header("Location: ".SITE_URL.$siteData['language'].'/'.$siteData['section_slug']."/?registration_done".$str);		
			} //not inserted
			else $error['db_error'] = $language['try_later'];
		}
		
		$post = array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'age' => $age,
			'region' => $region
		);
		
		$smarty->assign('post', $post);
		
	} 
	
	
	
	//array for meta tags
	
	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

$smarty->assign('og_array', $og_array);	
$smarty->assign('error', $error);	
$smarty->assign('warning', $warning);	
$smarty->assign('notification', $notification);
$smarty->assign('regions', $region_arr);
$smarty->assign('content_file', 'registration.tpl');

?>