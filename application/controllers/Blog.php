<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');              
        }
	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/content');
		$data['entries'] = $this->blog_model->getEntries();
	   	$this->load->view('home/blog', $data);
		//$this->load->view('home/contacto');
		$this->load->view('home/footer');

	}

	public function entry(){
       	$this->load->view('home/header');
        $this->load->view('home/new_entry');


        }

        public function insert_entry(){
                $entry = array(
                        'permalink' => permalink($this->input->post('title')),
                        'author' => 'Small Ronny',
                        'title' => $this->input->post('title'),
                        'content' => $this->input->post('content'),
                        'date' => date('Y-m-d'),
                        'tags' => $this->input->post('tags')

                        );             
                $this->blog_model->insert('entries', $entry);
                redirect(base_url());
        } 

      
 
 
}
 
  

	 

 


