<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="col-md-9 page-content">
			
			{if is_array($info_content)}  
            {foreach $info_content as $index => $news}
			<div class="col-md-6" style="padding: 0;">
				<div class="item news-item">
					<div class="inner-item">
						<a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">
						{if $news.thumbnail}
                        <img src="res/images/thumb/{$news.thumbnail}" alt="{$news.title|replace:'"':''}"/>
                        {else}
                        <img src="themes/default/images/no-image.jpg" alt="{$news.title|replace:'"':''}"/>
                        {/if}
						</a>
						<div class="hover-item">
							<ul><li>{if $site_data.section_style != 3}<a class="date" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">
								<i class="fa fa-clock-o"></i> {$news.start_date}
							</a>{/if}
							</li></ul>
						</div>
					</div>
					<h5><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">{$news.title}</a></h5>
					<p><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">{$news.description}</a></p>
				</div>
			</div>
            {/foreach}        
            {/if}
		<div>				
			
			<ul class="pagination-list">
			{foreach $pages.pages as $page}
			{if $page == '<<'}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}">{$page}</a></li>
			{else if $page == '>>'}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$pages.lastpage}">{$page}</a></li>
			{else if $pages.current_page == $page}
			<li><a class="active" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$page}">{$page}</a></li>
			{else}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$page}">{$page}</a></li>
			{/if}
			{/foreach}
			</ul>
		</div>
	</div>
	{include file = 'right_sidebar.tpl'}
</div>
</div>