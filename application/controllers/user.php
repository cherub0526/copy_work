<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class User extends CI_Controller {  

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form','html','xml'));
		$this->load->model('job_model');
  }

    public function register()  
    {  
      $data = array(
        'data' => array(
          'category' => $this->job_model->category(),
          'tab' => $this->job_model->category(),
        ),
        'view' => array('login','register'),
      );

      foreach($data['data']['tab'] as $content)
      {
        $data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
      }

      $this->load->view('template',$data);
    }
    //     $this->load->view('register');  
    // }  
  
    public function login(){  
        $this->load->view('login');     
    }  
}  