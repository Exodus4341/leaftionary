<?php echo Form::open(array("class"=>"form-horizontal",'enctype' => 'multipart/form-data')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Filename', 'url'); ?>

			<div class="input">
				<?php echo Form::input('fileselect[]', '',array('type' => 'file', 'multiple' => 'true')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Plant id', 'plant_id'); ?>

			<div class="input">
				<?php echo Form::select('plant_id', Input::post('plant_id', isset($image) ? $image->plant_id : ''),$plant, array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>