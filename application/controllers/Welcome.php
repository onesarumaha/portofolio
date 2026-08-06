<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function send()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {

            echo json_encode([
                'status' => false,
                'message' => validation_errors()
            ]);
            return;
        }

        $data = [
            'name'       => $this->input->post('name', true),
            'email'      => $this->input->post('email', true),
            'message'    => $this->input->post('message', true),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->db->insert('contact_messages', $data);

        echo json_encode([
            'status' => true,
            'message' => 'Pesan berhasil dikirim.'
        ]);
    }
}
