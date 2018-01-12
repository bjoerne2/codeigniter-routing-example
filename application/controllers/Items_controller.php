<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
	}

	public function index()
	{
		$data = array('items' => $this->item_model->get_all());
		$this->load->view('header');
		$this->load->view('items/index', $data);
		$this->load->view('footer');
	}

	public function show($id)
	{
		$data = array('item' => $this->item_model->get($id));
		$this->load->view('header');
		$this->load->view('items/show', $data);
		$this->load->view('footer');
	}

	public function new_item()
	{
		$this->load->view('header');
		$this->load->view('items/new');
		$this->load->view('footer');
	}

	public function create()
	{
		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('items/new');
			$this->load->view('footer');
		} else {
			$data = array('name' => $this->input->post('name'));
			$this->item_model->insert($data);
			redirect(site_url('items'));
		}
	}

	public function edit($id)
	{
		$this->load->view('header');
		$this->load->view('items/edit', array('id' => $id, 'item' => $this->item_model->get($id)));
		$this->load->view('footer');
	}

	public function update($id)
	{
		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('items/edit', array('id' => $id));
			$this->load->view('footer');
		} else {
			$data = array('name' => $this->input->post('name'));
			$this->item_model->update($id, $data);
			redirect(site_url('items'));
		}
	}

	public function delete($id)
	{
		$this->item_model->delete($id);
		redirect(site_url('items'));
	}
}
