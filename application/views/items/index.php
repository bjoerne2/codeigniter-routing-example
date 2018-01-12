<h1>Items</h1>
<p><a href="<?= site_url('items/new') ?>" class="btn btn-primary">New</a></p>
<table class="table">
	<colgroup>
		<col width="99%">
		<col width="1%">
	</colgroup>
	<thead>
		<tr>
			<td>Name</td>
			<td>Actions</td>
		</tr>
	</thead>
	<?php foreach ($items as $item): ?>
		<tr>
			<td><?= $item->name ?></td>
			<td class="action-column">
				<a href="<?= site_url('items/' . $item->id) ?>">Show</a> |
				<a href="<?= site_url('items/' . $item->id . '/edit') ?>">Edit</a> |
				<?php echo form_open('items/' . $item->id, array('class' => 'link-button-form')); ?><button type="submit">Delete</button><input type="hidden" name="_method" value="delete"></form>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
