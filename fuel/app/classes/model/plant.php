<?php
class Model_Plant extends \Orm\Model
{
	protected static $_belongs_to = array('images' => array('key_from' => 'id'));
	
	protected static $_properties = array(
		'id',
		'label_name',
		'scientific_names',
		'common_names',
		'vernacular_names',
		'description',
		'distribution',
		'constituents',
		'properties',
		'parts_used',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('label_name', 'Label Name', 'required');
		$val->add_field('scientific_names', 'Scientific Names', 'required');
		$val->add_field('common_names', 'Common Names', 'required');
		$val->add_field('vernacular_names', 'Vernacular Names', 'required');
		$val->add_field('description', 'Description', 'required');
		$val->add_field('distribution', 'Distribution', 'required');
		$val->add_field('constituents', 'Constituents', 'required');
		$val->add_field('properties', 'Properties', 'required');
		$val->add_field('parts_used', 'Parts Used', 'required');

		return $val;
	}

}
