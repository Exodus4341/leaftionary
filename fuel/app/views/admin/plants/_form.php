<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Label names', 'label_name'); ?>

			<div class="input">
				<?php echo Form::textarea('label_name', Input::post('label_name', isset($plant) ? $plant->label_name : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Scientific names', 'scientific_names'); ?>

			<div class="input">
				<?php echo Form::textarea('scientific_names', Input::post('scientific_names', isset($plant) ? $plant->scientific_names : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Common names', 'common_names'); ?>

			<div class="input">
				<?php echo Form::textarea('common_names', Input::post('common_names', isset($plant) ? $plant->common_names : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Vernacular names', 'vernacular_names'); ?>

			<div class="input">
				<?php echo Form::textarea('vernacular_names', Input::post('vernacular_names', isset($plant) ? $plant->vernacular_names : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Description', 'description'); ?>

			<div class="input">
				<?php echo Form::textarea('description', Input::post('description', isset($plant) ? $plant->description : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Distribution', 'distribution'); ?>

			<div class="input">
				<?php echo Form::textarea('distribution', Input::post('distribution', isset($plant) ? $plant->distribution : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Constituents', 'constituents'); ?>

			<div class="input">
				<?php echo Form::textarea('constituents', Input::post('constituents', isset($plant) ? $plant->constituents : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Properties', 'properties'); ?>

			<div class="input">
				<?php echo Form::textarea('properties', Input::post('properties', isset($plant) ? $plant->properties : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Parts used', 'parts_used'); ?>

			<div class="input">
				<?php echo Form::textarea('parts_used', Input::post('parts_used', isset($plant) ? $plant->parts_used : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>