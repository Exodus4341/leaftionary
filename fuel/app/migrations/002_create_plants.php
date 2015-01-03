<?php

namespace Fuel\Migrations;

class Create_plants
{
	public function up()
	{
		\DBUtil::create_table('plants', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'scientific_names' => array('type' => 'text'),
			'common_names' => array('type' => 'text'),
			'vernacular_names' => array('type' => 'text'),
			'description' => array('type' => 'text'),
			'distribution' => array('type' => 'text'),
			'constituents' => array('type' => 'text'),
			'properties' => array('type' => 'text'),
			'parts_used' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('plants');
	}
}