
<div class="panel-heading">
	<h5 class="panel-title"><?php echo $TRANSLATION['list of companies']; ?></h5>
	<div class="heading-elements">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info">+ <?php echo $TRANSLATION['add new company']; ?></a>
	</div>
</div>
<table class="table datatable-column-search-inputs">
	<thead>
		<tr>
			<th><?php echo $TRANSLATION['name'];?></th>
			<th><?php echo $TRANSLATION['type'];?></th>
			<th><?php echo $TRANSLATION['edit'];?></th>
			<th><?php echo $TRANSLATION['content'];?></th>
			<th><?php echo $TRANSLATION['delete'];?></th>
			<th class="text-center"><?php echo $TRANSLATION['sort'];?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo build_menu($database_link, 0, $content_language, $level = 0, $section_family = 1) ?>
	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tfoot>
</table>



