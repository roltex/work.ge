
<div class="panel-heading">
	<h5 class="panel-title"><?php echo $TRANSLATION['page_list']; ?></h5>
	<div class="heading-elements">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info">+ <?php echo $TRANSLATION['new_page']; ?></a>
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
						<?php echo build_menu($database_link, 0, $content_language) ?>
						
						<tfoot>
							<tr>
				                <td><?php echo $TRANSLATION['name'];?></td>
				                <td><?php echo $TRANSLATION['type'];?></td>
				                <td><?php echo $TRANSLATION['edit'];?></td>
				                <td><?php echo $TRANSLATION['content'];?></td>
				                <td><?php echo $TRANSLATION['delete'];?></td>
				                <td><?php echo $TRANSLATION['sort'];?></td>
				            </tr>
						</tfoot>
					</table>


<script type="text/javascript">/*
var sorter = new SectionSorter($("#sortable ul"));

$("#sortable ul").sortable({
	handle: ".handle",
	connectWith: "#sortable ul",
	placeholder: "sortable-placeholder",
	cursor: "move"
}).bind({
	'sortstart': function(event, ui) {
		if(!sorter.sortStarted()) {
			ui.item.addClass("sortable-item");
			ui.item.find(".sortable-actions").hide();
			$("#sortable ul").addClass("sortable-empty-place");
			sorter.startSort();
			sorter.onStart(event, ui);
		}
	},
	'sortstop': function(event, ui) {
		if(sorter.sortStarted()) {
			ui.item.removeClass("sortable-item");
			ui.item.find(".sortable-actions").show();
			$("#sortable ul").removeClass("sortable-empty-place");
			sorter.stopSort();
			sorter.onStop(event, ui);
		}
	}
});*/
</script>
