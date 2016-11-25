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
				<form id="contact-form" method="post">
                	<div class="text-input">
                    	<div class="float-input">
							<input name="name" id="name" type="text" value="{$post.name}" placeholder="{$language.fullname}">
							<span><i class="fa fa-user"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="email" id="email" type="text" value="{$post.email}" placeholder="{$language.email}">
							<span><i class="fa fa-envelope"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="age" id="age" type="text" value="{$post.age}" placeholder="{$language.age}">
							<span><i class="fa fa-calendar" aria-hidden="true"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="tel" id="tel" type="text" value="{$post.phone}" placeholder="{$language.phone}">
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						</div>
					</div>
                    
                    <select class="form-control" id="sel1" name="region">
                        <option value="0">{$language.region}</option>
                    	{foreach $regions as $index => $region}
                        <option value="{$index}" {if $index == $post.region}selected="selected"{/if}>{$region}</option>
                        {/foreach}
					</select>	
                    <div class="msg2 message"></div>
                    <input type="submit" name="submit" class="submit_contact main-form" value="{$language.registration}">

				</form>
			{/if}   
			
			{include file='widgets/social.tpl'}         
			</div>	
            
			{include file = 'right_sidebar.tpl'}
		</div>
	</div>
</div>





