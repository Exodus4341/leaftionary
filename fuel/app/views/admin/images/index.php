<h2>Listing Images</h2>
<br>
<?php if ($images): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Filename</th>
			<th>Plant id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($images as $image): ?>		<tr>

			<td><?php echo $image->url; ?></td>
			<td><?php echo $image->plant_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/images/view/'.$image->id, 'View'); ?> |
				<?php echo Html::anchor('admin/images/edit/'.$image->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/images/delete/'.$image->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Images.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/images/create', 'Add new Image', array('class' => 'btn btn-success')); ?>

</p>
