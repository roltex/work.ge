<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h3>
		<div class="row page-content">
			<div class="col-md-9">
            {if $error}
            	<ul class="error">
            	{foreach $error as $info}
                <li>{$info}</li>
                {/foreach}
                </ul>
			{/if}
            {if $notification}
            <ul class="notification">
            {foreach $notification as $info}
            <li>{$info}</li>
            {/foreach}
            </ul>
            {else}
			{$info_content}
	
		<script language="JavaScript" type="text/javascript" src="{$site_url}js/ajax_captcha.js"></script>
			<form id="contact-form" class="form-horizontal" method="post" enctype="multipart/form-data">
                	<div class="text-input">
                    
                        <div class="float-input {$error.required_name}">
                            <div class="controls">
                                <input type="text" placeholder="{$language.name_surname}" name="name" value="{$name}"/>
								<span><i class="fa fa-user"></i></span>
                            </div>
                        </div>      
                        
                        <div class="float-input {$error.email}">
                            <div class="controls">
                                <input type="text" name="email" placeholder="{$language.email}" value="{$email}"/>
								<span><i class="fa fa-envelope"></i></span>
                            </div>
                        </div> 
                    
                        <div class="float-input {$error.required_phone}">
                            <div class="controls">
                                <input type="text" placeholder="{$language.contact_phone}" name="contact_phone" value="{$contact_phone}"/>
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                        </div>  
                    
                        <div class="float-input {$error.required_address}">
                            <div class="controls">
                                <input type="text" placeholder="{$language.address}" name="address" value="{$address}"/>
								<span><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    
                        <div class="float-input">
                            <div class="controls">
                                <label for="file">{$language.cv_upload}</label><br />
                                <input type="file" id="file" name="file[]" multiple="multiple" class="app-file-upload"/>
                                <p>{$language.file_types}</p>
                            </div>
                        </div>
                    
                        <div class="float-input {$error.required_message}">
                            <div class="controls">
                                <textarea placeholder="{$language.stat_text}" name="message">{$message}</textarea>
								<span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                            </div>
                        </div>      
                                                
                        <div class="float-input {$error.required_captcha}">
                          <div class="controls">
                            &nbsp;
                          </div>
                        </div>
                        
                        <div class="float-input">
                            <div class="controls">
							<input id="txtCaptcha" placeholder="{$language.capcha}" type="text" name="txtCaptcha" class="small-input"/>
                            <img id="imgCaptcha" src="includes/ajax/create_image.php" height="44" alt="captcha"/>
							<input type="submit" name="action" class="submit_contact main-form" value="{$language.send}"/>
                            </div>
                        </div>
                        
					</div>
                    </form>
					
				<script language="JavaScript" type="text/javascript" src="{$site_url}js/ajax_captcha.js"></script>
			{/if}            
			</div>	
            
			{include file = 'right_sidebar.tpl'}
		</div>
	</div>
</div>