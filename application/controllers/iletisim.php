<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iletisim extends CI_Controller {
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

        $this->load->view('site/iletisim',$viewData);
	}

    public function sendmail()
    {


        $name = $this->input->post("name");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");


        $mail_message = $name . " isimli kullanıdan $subject başlıklı maili aşağıdaki gibidir.
                        $message 
                        İletişim Bilgileri:
                        Email : $email 
                        Telefon: $phone";


        if ($mail_message){

            $config = array(
                "protocol" =>"smtp",
                "smtp_host" =>"ssl://smtp.googlemail.com",
                "smtp_port" =>465,
                "smtp_user" =>"smartybilisim@gmail.com",
                "smtp_pass" =>"15825270"
            );

            $this->load->library('email',$config);
            $this->load->library("session");

            $this->email->set_newline("\r\n");

            $this->email->from($email,$name);
            $this->email->to('serhatocal1@gmail.com');
            $this->email->subject($subject);
            $this->email->message($mail_message);

            if ($this->email->send()){

                $this->session->set_userdata();
                redirect(base_url("iletisim"));
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                );
            }else {
                show_error($this->email->print_debugger());
            }
        }else{
            echo " Lütfen Formu kontrol ediniz.";
        }
    }

}