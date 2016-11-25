<div id="content">
	<div class="container">		
		<h3 class="page-title">{$gall_title}</h3>
		<div class="row">
			{foreach $group as $g}
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="zoom" href="res/images/{$g.file}">
					<img class="img-responsive" src="res/images/thumb/{$g.file}" alt="{$g.title}" />
				</a>
			</div>
			{/foreach}
       	 </div>
		 {include file='widgets/social.tpl'}
    </div>
</div>