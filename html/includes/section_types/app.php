<?php

$get_info_query = "SELECT `bc_info`.`pk`,
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
						  `bc_sections`.`description` AS `section_description`
					FROM
						  `bc_info`, `bc_sections`
					WHERE
						  `bc_info`.`section_id` = " . $siteData['section'] . " AND
						  `bc_info`.`language` = '" . $siteData['language'] . "' AND 
						  `bc_sections`.`id` = ". $siteData['section'] ." AND 
						  `bc_sections`.`language` = '" . $siteData['language'] . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	$smarty->assign('info_title', $get_info_data->title);
	
	$smarty->assign('thumbnail', $get_info_data->thumbnail);
	
	$smarty->assign('info_description', $get_info_data->description);
	
	$smarty->assign('info_content', $get_info_data->content);	
	
}

//array for meta tags
	
$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

	$smarty->assign('og_array', $og_array);
	
	

//get email from settings
$membership_contact_email = $setting_data['public_email'];

if(isset($_POST['action'])) {
	
	$name = extractPost('name');
	$email = extractPost('email');
	$contact_phone = extractPost('contact_phone');
	$address = extractPost('address');	
	//$recive_type = extractPost('recive_type');
	$message = extractPost('message'); 
	$txtCaptcha = extractPost('txtCaptcha');
	$date = date('Y-m-d h:i');
	
	if($name == ''){
		$error['required_name'] = $language['name_error'];
	}
	if(!check_email($email) || $email == ''){
		$error['email'] = $language['email_format_error'];
	}	
	if($contact_phone == ''){
		$error['required_phone'] = $language['phone_error'];
	}
	/*
	if($recive_type == ''){
		$error['required_type'] = 'required';
	}
	*/
	if($message == ''){
		$error['required_message'] = $language['message_error'];
	}
	if($address == ''){
		$error['required_address'] = $language['address_error'];
	}
	if( $txtCaptcha != $_SESSION["security_code"]){
		$error['required_captcha'] = $language['captcha_error'];
	}
	
	
	//upload application form
	if($_FILES['file']['name'][0] != '' && $_FILES['file']['error'][0] == 0) {
		
		foreach($_FILES['file']['name'] as $key => $app) {
			
			$ext = substr($_FILES['file']['name'][$key], strrpos($_FILES['file']['name'][$key], '.') + 1);
			
			$files[] = array('new_name' => $email.'_attachment.'.$ext, 'file' => $_FILES['file']['tmp_name'][$key]);
		
		}
		
	}
	
	
	
	
	if(count($error) == 0) {
		
		$random_string = rand(999, 9999);
		
		$subject = 'საჯარო ინფორმაციის მოთხოვნა '.SITE_URL.'';
$content_message = '
თარიღი: '.$date.'
განცხადების უნიკალური კოდია: '.$random_string.'
სახელი: '.$name.'
ელ-ფოსტა: '.$email.'
საკონტაქტო ტელეფონი: '.$contact_phone.'
მისამართი: '.$address.'
'.$message.'';
					
$user_subject = 'გამოითხოვეთ საჯარო ინფორმაცია '.SITE_URL.'';
$user_message = $date.'
გმადლობთ, თქვენი განცხადება მიღებულია. განცხადების უნიკალური კოდია: '.$random_string.' ';
		/*			
		//send in email
		require_once "includes/PHPMailer/PHPMailerAutoload.php";
		
		$mail = new PHPMailer;
		//Enable SMTP debugging. 
		$mail->SMTPDebug = 3;                               
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "mail.mydocuments.ge";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = "mailer@mydocuments.ge";                 
		$mail->Password = "ertiorisami123";                           
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls";                           
		//Set TCP port to connect to 
		$mail->Port = 587;                                   
		
		$mail->From = "mailer@mydocuments.ge";
		$mail->FromName = "Full Name";
		
		$mail->AddReplyTo('annasharvadze@yahoo.com', 'Anna');
		$mail->addAddress("temosurguladze@gmail.com", "Recepient sda Name");
		//$mail->AddAttachment($_FILES['uploaded_file']['tmp_name'], $_FILES['uploaded_file']['name']);
		
		$mail->isHTML(true);
		
		$mail->Subject = "იმის საბჯექტი";
		$mail->Body = "<i>Mail body in HTML ასდა სდა დსა</i>";
		$mail->AltBody = "This is the plain text version of the email content";
		
		if(!$mail->send()) 
		{
			$error['email'] = $language['mail_send_notify'];//echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
			$notification = $language['request_done']; //echo "Message has been sent successfully";
		}
		*/
		
		if(send_mail($to = $membership_contact_email, $from = $email, $subject, $content_message, $files)){
			send_mail($email, $membership_contact_email, $user_subject, $user_message, $files = '');
			$notification = $language['request_done'];
			//header("refresh:5;url='".SITE_URL.$siteData['language']."");
		} else $error['email'] = $language['mail_send_notify'];
		
		
	}
	
	$smarty->assign('error', $error);
	$smarty->assign('notification', $notification);
	$smarty->assign('warning', $warning);
	
	$smarty->assign('name', $name);
	$smarty->assign('email', $email);
	$smarty->assign('address', $address);
	$smarty->assign('contact_phone', $contact_phone);
	$smarty->assign('message', $message);
	$smarty->assign('recive_type', $recive_type);
	
}


//meta tags info
$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
$smarty->assign('og_array', $og_array);
$smarty->assign('membership_app', $membership_app_url);

$smarty->assign('content_file', 'app.tpl');

?>