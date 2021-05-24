<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web_development extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $data['view'] = "web_development";
        $this->load->view('admin_master', $data);
    }

    public function mail_data() {
        $subject = 'Inquery Detail For Web Development';
        $message = '<html>';
        $message .= '<head><title>Inquery</title></head>';
        $message .= '<body>';
        $message .= 'Inquiry Detail  is here..<br><br>';
        $message .= '<b>Name :- </b>' . $this->input->post('name') . '<br>';
        $message .= '<b>Email id:- </b>' . $this->input->post('email') . '<br>';
        $message .= '<b>Mobile No:- </b>' . $this->input->post('phone') . '<br>';
        $message .= '<b>Message:- </b>' . $this->input->post('comments');
        $message .= '</body>';
        $message .= '</html>';

        if ($this->common->sendmails($subject, $message)) {
            $newdata = "Your Message was submited successfully. We will Contact you later.";
            $this->session->set_userdata('success', $newdata);
            redirect('web_development');
        } else {
            $newdata = "Your Message was not submited successfully. Please try again later.";
            $this->session->set_userdata('error', $newdata);
            redirect('web_development');
        }
    }

    public function zip_data() {
        $subject = 'Inquery Detail For Web Development';
        $message = '<html>';
        $message .= '<head><title>Inquery</title></head>';
        $message .= '<body>';
        $message .= 'Inquiry Detail  is here..<br><br>';
        $message .= '<b>Name :- </b>' . $this->input->post('name') . '<br>';
        $message .= '<b>Email id:- </b>' . $this->input->post('email') . '<br>';
        $message .= '<b>Mobile No:- </b>' . $this->input->post('phone') . '<br>';
        $message .= '<b>Zipcode:- </b>' . $this->input->post('zipcode');
        $message .= '</body>';
        $message .= '</html>';

        if ($this->common->sendmails($subject, $message)) {
            $newdata = "Your Message was submited successfully. We will Contact you later.";
            $this->session->set_userdata('success', $newdata);
            redirect('web_development');
        } else {
            $newdata = "Your Message was not submited successfully. Please try again later.";
            $this->session->set_userdata('error', $newdata);
            redirect('web_development');
        }
    }

}
