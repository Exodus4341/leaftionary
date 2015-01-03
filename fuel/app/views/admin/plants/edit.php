<h2>Editing Plant</h2>
<br>

<?php echo render('admin\plants/_form'); ?>
<p>
	<?php echo Html::anchor('admin/plants/view/'.$plant->id, 'View'); ?> |
	<?php echo Html::anchor('admin/plants', 'Back'); ?></p>
