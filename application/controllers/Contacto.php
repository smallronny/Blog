<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Contacto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view("contacto/index", $this->_formFields());
    }
    

    public function send()
    {
        if($this->input->post("send"))
        {
            $this->load->helper("security");
            $this->form_validation->set_rules("name", "Nombre", "required|trim|min_length[2]|max_length[100]|xss_clean");
            $this->form_validation->set_rules("email", "Email", "required|trim|xss_clean");
            $this->form_validation->set_rules("message", "Mensaje", "required|trim|min_length[10]|max_length[255]|xss_clean");

            $this->form_validation->set_message("required", "El campo %s es requerido");
            $this->form_validation->set_message("valid_email", "El campo %s no tiene un formato válido");
            $this->form_validation->set_message("min_length", "El campo %s no puede tener menos de %s caracteres");
            $this->form_validation->set_message("max_length", "El campo %s no puede tener más de %s caracteres");

            if($this->form_validation->run() === FALSE)
            {
                $this->index();
            }
            else
            {
                $this->load->library("email");
                $this->email->from("smallronny@gmail.com");
                $this->email->to($this->input->post("email"));
                $this->email->subject("Formulario de contacto");
                $this->email->message($this->input->post("message"));

                if($this->email->send())
                {
                    $this->session->set_flashdata("success", "Email enviado correctamente");
                    redirect(base_url("contacto"), "refresh");
                }
                else
                {
                    show_error($this->email->print_debugger());
                }
            }
        }
        else
        {
            redirect(base_url("contacto"));
        }
    }

    /**
     * @return array
     */
    private function _formFields()
    {
        return array(
            'name' => array(
                'name'          => 'name',
                'id'            => 'name',
                'value'         => set_value('name'),
                'maxlength'     => '100',
                'size'          => '50',
                'class'         => 'form-control'
            ),
            'email' => array(
                'name'          => 'email',
                'id'            => 'email',
                'value'         => set_value('email'),
                'class'         => 'form-control'
            ),
            'message' => array(
                'name'          => 'message',
                'id'            => 'message',
                'class'         => 'form-control',
                'rows'          => '5',
                'value'         => set_value('message')
            )
        );
    }
}
//End of file applications/controller/Home.php