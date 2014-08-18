<?php

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form','html','xml'));
		$this->load->model('job_model');
	}


	public function about($page='about')
	{
		
		$data = array(
			'data' => array(
				'category' => $this->job_model->category(),
				'tab' => $this->job_model->category(),
				),
			'view' => array('login','pages/about'),
			);
		foreach($data['data']['tab'] as $content)
		{
			$data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
		}

		$this->load->view('template',$data);
	}

	public function express($page='about')
	{
		
		$data = array(
			'data' => array(
				'category' => $this->job_model->category(),
				'tab' => $this->job_model->category(),
				),
			'view' => array('login','pages/express'),
			);
		foreach($data['data']['tab'] as $content)
		{
			$data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
		}

		$this->load->view('template',$data);
	}

}