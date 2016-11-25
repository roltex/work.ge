<div class="row">
    <div id="header"></div>
    <div class="content">
        <h2 class="font-title">{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h2>
        {if $thumbnail}
        <div class="col-md-4">
            <a class="zoom standard_image" href="{$site_url}res/images/{$thumbnail}">
                <img src="{$site_url}res/images/small_{$thumbnail}" alt="{$info_title}"/>
            </a>
        </div>
        {/if}
        {$info_content}
    
        <h3 class="font-title">პარტნიორები</h3>
        <ul>
            <li><a href="" target="_blank"><img src="assets/images/partners/2.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/1.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/2.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/1.png" alt="" title=""></a></li>
        </ul>
    
    </div>
</div>
