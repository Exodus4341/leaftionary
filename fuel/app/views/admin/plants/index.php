<h2>Listing Plants</h2>
<br>
<?php if ($plants): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Label names</th>
			<th>Scientific names</th>
			<th>Common names</th>
			<th>Vernacular names</th>
			<th>Description</th>
			<th>Distribution</th>
			<th>Constituents</th>
			<th>Properties</th>
			<th>Parts used</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($plants as $plant): ?>		<tr>

			<td><?php echo $plant->label_name; ?></td>
			<td><?php echo $plant->scientific_names; ?></td>
			<td><?php echo $plant->common_names; ?></td>
			<td><?php echo $plant->vernacular_names; ?></td>
			<td><?php echo $plant->description; ?></td>
			<td><?php echo $plant->distribution; ?></td>
			<td><?php echo $plant->constituents; ?></td>
			<td><?php echo $plant->properties; ?></td>
			<td><?php echo $plant->parts_used; ?></td>
			<td>
				<?php echo Html::anchor('admin/plants/view/'.$plant->id, 'View'); ?> |
				<?php echo Html::anchor('admin/plants/edit/'.$plant->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/plants/delete/'.$plant->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Plants.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/plants/create', 'Add new Plant', array('class' => 'btn btn-success')); ?>

</p>
