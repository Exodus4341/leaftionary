<?php 
class Controller_Api extends Controller_Rest {

	public function get_users(){
		$data['users'] = Model_User::find('all');
		return $this->response($data);

	}

	public function get_plants(){
		$data['plants'] = Model_Plant::find('all');
		return $this->response($data);

	}

	public function get_images(){
		$data['images'] = Model_Image::find('all');
		return $this->response($data);

	}
}