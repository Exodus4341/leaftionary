<?php
class Model_Image extends \Orm\Model
{
	protected static $_belongs_to = array('plant' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'url',
		'plant_id',
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
		$val->add_field('url', 'File Url', '');
		$val->add_field('plant_id', 'Plant Id', 'required|valid_string[numeric]');

		return $val;
	}

}
