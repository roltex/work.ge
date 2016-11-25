<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{$start_date} | {$info_title}</h3>
		<div class="col-md-9 page-content">
			
			<div class="col-md-12">
            	{if $info_img}
				<div class="col-md-4">
					{if $info_img && $info_files < 2}
					<a class="zoom" href="{$site_url}res/images/{$info_img}">
						<img src="{$site_url}res/images/thumb/{$info_img}" class="standard_image" alt="{$info_title}"/>
					</a>
					{/if}
					<ul class="post-gallery">
					{if $info_files}
						<li class="active">
							<a class="zoom" href="{$site_url}res/images/{$info_img}">
								<img src="{$site_url}res/images/thumb/{$info_img}" alt="{$image->name}"/>
							</a>
						</li>
					{/if}
					{foreach $info_files as $image}
						{if $info_img != $image->file}
						<li>
							<a class="zoom" href="{$site_url}res/images/{$image->file}">
								<img src="{$site_url}res/images/thumb/{$image->file}" alt="{$image->name}"/>
							</a>
						</li>
						{/if}
					{/foreach}
					</ul>
				</div>
				<div class="col-md-8" style="padding: 20px 0px 0px 0px;">{$info_content}</div>
                {else}
                {$info_content}
                {/if}
				{include file = 'widgets/social.tpl'}
			</div>			
		</div>
		{include file = 'right_sidebar.tpl'}
	</div>
</div>