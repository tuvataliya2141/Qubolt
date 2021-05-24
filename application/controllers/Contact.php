<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['view'] = "contact";
        $this->load->view('admin_master', $data);
    }

    public function mail_data() {
        $subject = 'Inquery Detail';
        $message = '<html>';
        $message .= '<head><title>Inquery</title></head>';
        $message .= '<body>';
        $message .= 'Inquiry Detail  is here..<br><br>';
        $message .= '<b>Name :- </b>' . $this->input->post('name') . '<br>';
        $message .= '<b>Email id:- </b>' . $this->input->post('email') . '<br>';
        $message .= '<b>Mobile No:- </b>' . $this->input->post('phone') . '<br>';
        $message .= '<b>Message:- </b>' . $this->input->post('message');
        $message .= '</body>';
        $message .= '</html>';

        if ($this->common->sendmails($subject, $message)) {
            $newdata = "Your Message was submited successfully. We will Contact you later.";
            $this->session->set_userdata('success', $newdata);
            redirect('contact');
        } else {
            $newdata = "Your Message was not submited successfully. Please try again later.";
            $this->session->set_userdata('error', $newdata);
            redirect('contact');
        }
    }
}