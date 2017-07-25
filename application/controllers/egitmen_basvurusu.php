<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Egitmen_basvurusu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("activity_category_model");

    }
	public function index()
	{
        $viewData = new stdClass();

        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $viewData->categorys  = $category;

        $viewData->contact  = $contact;

        $this->load->view('site/egitmen_basvurusu',$viewData);
	}

    public function sendEmail()
    {
        if($this->input->post('send_email') == 'send_email'){
            $this->load->library('email');

            $config['upload_path'] = 'uploads/egitmen_basvurusu';
            $config['allowed_types'] = '*';
            $config['max_size'] = '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $first_name     = $this->input->post("first_name");
            $last_name      = $this->input->post("last_name");
            $email          = $this->input->post("email");
            $phone          = $this->input->post("phone");
            $message        = $this->input->post("message");
            $mail_message   = $first_name . $last_name. " isimli kullanıdan gelen mail aşağıdaki gibidir.
                        $message
                        İletişim Bilgileri:
                        Email : $email
                        Telefon: $phone";

            $this->load->library('upload', $config);
            $this->upload->do_upload('attachment');
            $upload_data = $this->upload->data();

            $this->email->attach($upload_data['full_path']);
            $this->email->set_newline("\r\n");
            $this->email->set_crlf("\r\n");
            $this->email->from($email,$first_name); // change it to yours
            $this->email->to('serhatocal1@gmail.com'); // change it to yours
            $this->email->subject('Eğitmen Başvurusu');
            $this->email->message($mail_message);

            if ($this->email->send()) {
                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("egitmen_basvurusu"));

            } else {
                show_error($this->email->print_debugger());
            }
        }else{
            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-error"),
                    "alert-type" => "error"
                )
            );
        }
    }

}
