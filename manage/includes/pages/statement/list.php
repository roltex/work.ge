<?php
if(INSYS != 'pc777') die('404');
$section_id = extractGet('section_id');
?>
							<div class="panel-heading">
								<h5 class="panel-title"><?php echo $TRANSLATION['list of statement']; ?></h5>
								<div class="heading-elements panel-pills">
									<form name="add_new" method="get" action="" class="heading-form">
										<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
										<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
										<input type="hidden" name="act" value="add" />
									<ul class="nav nav-pills">
										<li class="active"><?php echo $TRANSLATION['company']; ?> -</li>
										<li style="width: 200px !important">
											<select name="section_id" class="select" onchange="location.href='<?php echo '?page='.$page.'&language='.$content_language.'&act=list&section_id='; ?>'+this.value">
												<?php echo getCompany($page_type, $content_language, $database_link, $section_id); ?>
											</select>
										</li>
										<li class="dropdown">
											<input type="submit" name="doAddInfo" value="<?php echo $TRANSLATION['add new statement']; ?>" class="btn btn-info" />
										</li>
									</ul>
									</form>
			                	</div>
							</div>
							
							


<table class="table datatable-column-search-inputs">

	<thead>
		<tr>
			<th><?php echo $TRANSLATION['name']; ?></th>
			<th><?php echo $TRANSLATION['company']; ?></th>
			<th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
		</tr>
	</thead>

	<tbody>
		<tr></tr>
	<?php echo build_statement_menu($database_link, $content_language) ?>

</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tfoot>

</table>

