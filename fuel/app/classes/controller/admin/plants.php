<?php
class Controller_Admin_Plants extends Controller_Admin 
{

	public function action_index()
	{
		$data['plants'] = Model_Plant::find('all');
		$this->template->title = "Plants";
		$this->template->content = View::forge('admin\plants/index', $data);

	}

	public function action_view($id = null)
	{
		$data['plant'] = Model_Plant::find($id);

		$this->template->title = "Plant";
		$this->template->content = View::forge('admin\plants/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Plant::validate('create');

			if ($val->run())
			{
				$plant = Model_Plant::forge(array(
					'label_name' => Input::post('label_name'),
					'scientific_names' => Input::post('scientific_names'),
					'common_names' => Input::post('common_names'),
					'vernacular_names' => Input::post('vernacular_names'),
					'description' => Input::post('description'),
					'distribution' => Input::post('distribution'),
					'constituents' => Input::post('constituents'),
					'properties' => Input::post('properties'),
					'parts_used' => Input::post('parts_used'),
				));

				if ($plant and $plant->save())
				{
					Session::set_flash('success', e('Added plant #'.$plant->id.'.'));

					Response::redirect('admin/plants');
				}

				else
				{
					Session::set_flash('error', e('Could not save plant.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Plants";
		$this->template->content = View::forge('admin\plants/create');

	}

	public function action_edit($id = null)
	{
		$plant = Model_Plant::find($id);
		$val = Model_Plant::validate('edit');

		if ($val->run())
		{
			$plant->label_name = Input::post('label_name');
			$plant->scientific_names = Input::post('scientific_names');
			$plant->common_names = Input::post('common_names');
			$plant->vernacular_names = Input::post('vernacular_names');
			$plant->description = Input::post('description');
			$plant->distribution = Input::post('distribution');
			$plant->constituents = Input::post('constituents');
			$plant->properties = Input::post('properties');
			$plant->parts_used = Input::post('parts_used');

			if ($plant->save())
			{
				Session::set_flash('success', e('Updated plant #' . $id));

				Response::redirect('admin/plants');
			}

			else
			{
				Session::set_flash('error', e('Could not update plant #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$plant->label_name = $val->validated('label_name');
				$plant->scientific_names = $val->validated('scientific_names');
				$plant->common_names = $val->validated('common_names');
				$plant->vernacular_names = $val->validated('vernacular_names');
				$plant->description = $val->validated('description');
				$plant->distribution = $val->validated('distribution');
				$plant->constituents = $val->validated('constituents');
				$plant->properties = $val->validated('properties');
				$plant->parts_used = $val->validated('parts_used');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('plant', $plant, false);
		}

		$this->template->title = "Plants";
		$this->template->content = View::forge('admin\plants/edit');

	}

	public function action_delete($id = null)
	{
		if ($plant = Model_Plant::find($id))
		{
			$plant->delete();

			Session::set_flash('success', e('Deleted plant #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete plant #'.$id));
		}

		Response::redirect('admin/plants');

	}


}