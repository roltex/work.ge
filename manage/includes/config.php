<?php



$config = array();



// Database



$config['database']['host'] = 'localhost';

$config['database']['username'] = 'tdtemo_workge';

$config['database']['password'] = 'Roltex123';

$config['database']['database'] = 'tdtemo_workge';



// General



$config['languages'] = array('en', 'ka', 'ru');

$config['site_url'] = 'http://localhost/work.ge/manage/';

$config['file_path'] = 'http://localhost/work.ge/uploads/files/';

$config['fpath'] = '../uploads/files/';

$config['PDFpath'] = '../uploads/docs/';





//$config['site_address'] = 'http://tbilisisilkroad.ge/';

$config['site_address'] = 'http://localhost/work.ge/';

$config['base_path'] = '/home/mydocume/public_html/ag/';

//$config['base_path'] = 'C:/xampp/htdocs/aig/';

$config['thumb_folder_name'] = 'thumb/';

$config['slider_folder_name'] = 'slider/';

$config['docs_folder_name'] = 'docs/';





$config['file_folder'] = $config['base_path'] . 'uploads/file-manager/';

$config['file_folder_name'] = 'uploads/file-manager/';

$config['file_folder_url'] = $config['site_address'] . 'uploads/file-manager/';





$config['temp_file_folder'] = $config['base_path'] . 'uploads/tmp/';

$config['temp_file_folder_name'] = 'tmp/';

$config['temp_file_folder_url'] = $config['site_address'] . 'uploads/tmp/';





$config['slider_post_images']['width'] = 2000;

$config['slider_post_images']['height'] = 580;

$config['post_images']['width'] = 212;

$config['post_images']['height'] = 201;

$config['gallery_images']['width'] = 252;

$config['gallery_images']['height'] = 183;

$config['gallery_cover']['width'] = 252;

$config['gallery_cover']['height'] = 183;







// Pages

$config['admin_pages'][-1] = (object)array('file' => 'auth.php');

$config['admin_pages'][0] = (object)array('file' => 'dashboard.php');



// Upload Extensions

$config['upload_extensions'] = '.pdf .doc .docx .xls .xlsx .jpg .gif .png .zip .rar .ppt .flv .swf';

$config['upload_max_filesize'] = 10485760; // in bytes

$config['upload_name_validchars'] = "abcdefghijklmnopqrstuvwxyz0123456789-_.";



$additional_tabs = array('fb_url' => 0, 'linkedin_url' => 1, 'twitter_url' => 2);

$post_type_fields = array(

		1 => array('id' => '1', 	'name' => 'დასახელება',					'field_name' => 'name'),

		2 => array('id' => '2', 	'name' => 'ვაკანტური ადგილების რაოდენობა',	'field_name' => 'vacancies'),

		3 => array('id' => '3', 	'name' => 'ტექსტი', 					'field_name' => 'text'),

		4 => array('id' => '4', 	'name' => 'ფაილის ატვირთვა pdf', 		'field_name' => 'pdf'),

		5 => array('id' => '5', 	'name' => 'სამუშაო განაკვეთი', 			'field_name' => 'work_rate'),

		6 => array('id' => '6', 	'name' => 'მდებარეობა (ქალაქები)', 		'field_name' => 'location'),

		7 => array('id' => '7', 	'name' => 'კატეგორია (Top მენეჯერი…)', 	'field_name' => 'category'),

		8 => array('id' => '8', 	'name' => 'გამოცდილება', 				'field_name' => 'experiens'),

		9 => array('id' => '9', 	'name' => 'განათლება', 				'field_name' => 'education'),

		10 => array('id' => '10', 	'name' => 'შშმ პირები', 				'field_name' => 'disabilities'),

		11 => array('id' => '11', 	'name' => 'სტუდენტები', 				'field_name' => 'student'),

		12 => array('id' => '12', 	'name' => 'ხელფასი ფიქსირებელი', 			'field_name' => 'fixed_salary'),

		13 => array('id' => '13', 	'name' => 'ხელფასის რეინჯი', 			'field_name' => 'ranged_salary'),

		14 => array('id' => '14', 	'name' => 'ხელფასის ვალუტა', 			'field_name' => 'currency'),

		15 => array('id' => '15', 	'name' => 'დაწყების თარიღი', 			'field_name' => 'start_date'),

		16 => array('id' => '16', 	'name' => 'დამთვრების თარიღი', 			'field_name' => 'end_date'),

		17 => array('id' => '17', 	'name' => 'Vip', 					'field_name' => 'vip')

);





?>

