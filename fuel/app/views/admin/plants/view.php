<h2>Viewing #<?php echo $plant->id; ?></h2>

<p>
	<strong>Label names:</strong>
	<?php echo $plant->label_name; ?></p>
<p>
	<strong>Scientific names:</strong>
	<?php echo $plant->scientific_names; ?></p>
<p>
	<strong>Common names:</strong>
	<?php echo $plant->common_names; ?></p>
<p>
	<strong>Vernacular names:</strong>
	<?php echo $plant->vernacular_names; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $plant->description; ?></p>
<p>
	<strong>Distribution:</strong>
	<?php echo $plant->distribution; ?></p>
<p>
	<strong>Constituents:</strong>
	<?php echo $plant->constituents; ?></p>
<p>
	<strong>Properties:</strong>
	<?php echo $plant->properties; ?></p>
<p>
	<strong>Parts used:</strong>
	<?php echo $plant->parts_used; ?></p>

<?php echo Html::anchor('admin/plants/edit/'.$plant->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/plants', 'Back'); ?>