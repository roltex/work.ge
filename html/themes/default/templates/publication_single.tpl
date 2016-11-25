<div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}">{$site_data.section_name}</a></h1>
            <div class="content_top">
            	<h2 class="page-title">{$info_title}</h2>
            	{if $info_img}
                <a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$info_img}">
                    <img src="{$site_url}res/images/thumb/{$info_img}" class="standard_image" alt="{$info_title}"/>
                </a>
                {/if}
                {$info_content}
                {if $info_description}
                <iframe class="pdf_window" src="{$site_url}res/docs/{$info_description}"></iframe>
                {/if}
                {if $info_files && $info_files|count > 1}
                <ul class="post-gallery">
                {foreach $info_files as $image}
                <li><a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$image->file}" title="{$image->name}">
                	<img src="{$site_url}res/images/thumb/{$image->file}" alt="{$image->name}"/>
                	</a>
                </li>
                {/foreach}  
                </ul>
                {/if}            
            </div>
            
            {include file = 'right_sidebar.tpl'}
            
        </div>
        
    </div>
</div>