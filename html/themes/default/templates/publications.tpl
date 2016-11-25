<div id="content">
	<div class="container"> 
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="col-md-9 page-content">
        {if is_array($info_content)}
        	<ul class="popular-product">
            {foreach $info_content as $index => $info_item}
				<li>{if $info_item.file_url}
					<a {if $info_item.file_url} href="{$site_url}res/docs/{$info_item.file_url}"{/if} target="_blank">
						<img src="themes/default/images/{$info_item.file_type}.png" alt="" />
						<div><h6>{$info_item.title}</h6></div>
                        {else}
						<div><h6>{$info_item.title}</h6></div>
                        {/if}
					</a>
				</li>
			{/foreach}
			</ul>			
		{/if}
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
		<!-- End content -->				
		{include file = 'right_sidebar.tpl'}
	</div>
</div>