<h2>Viewing #<?php echo $image->id; ?></h2>

<p>
	<strong>Filename:</strong>
	<?php echo $image->url; ?></p>
<p>
	<strong>Plant id:</strong>
	<?php echo $image->plant_id; ?></p>

<?php echo Html::anchor('admin/images/edit/'.$image->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/images', 'Back'); ?>