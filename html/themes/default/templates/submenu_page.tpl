<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="col-md-9 page-content">
        	<ul>
			{foreach from=$info key = index item=item}
            {if ($index + 1) % 3 == 0}
            <li class="extreme"><h4><a href="{$site_url}{$site_data.language}/{$item->slug}">{$item->name}</a></h4></li>
            {else}
            <li><h4><a href="{$site_url}{$site_data.language}/{$item->slug}">{$item->name}</a></h4></li>
            {/if}
            {/foreach}
            </ul>
		</div>
		{include file = 'right_sidebar.tpl'}
	</div>
</div>