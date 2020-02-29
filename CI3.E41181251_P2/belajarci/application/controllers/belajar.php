<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    function user()
    {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_user.php', $data);
    }

    function aksi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email', 'required');

        if ($this->form_validation->run() != false) {
            echo "Form validation oke";
        } else {
            $this->load->view('v_form');
        }
    }
}
