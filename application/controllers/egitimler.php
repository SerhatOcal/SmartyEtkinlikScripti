<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Egitimler extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("training_model");
        $this->load->model("activity_category_model");
        $this->load->library("session");


    }
	public function index()
	{
        $this->load->library("session");

        $viewData = new stdClass();
        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $training = $this->training_model->get_all();

        $viewData->categorys  = $category;
        $viewData->contact  = $contact;
        $viewData->trainings  = $training;

        $this->load->view('site/egitimler',$viewData);
	}

    public function detay($id)
    {

        $viewData = new stdClass();
        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $training = $this->training_model->get(array("id" => $id));

        $trainings = $this->training_model->get_all();

        $category = $this->activity_category_model->get_all(array(),"id ASC");



        $viewData->categorys  = $category;
        $viewData->trainings  = $training;
        $viewData->training  = $trainings;
        $viewData->contact  = $contact;


        $this->load->view('site/egitimler/detay', $viewData);

    }

    public function sendmail()
    {

        $name = $this->input->post("name");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");
        $message = $this->input->post("company");

        $mail_message = $name . " isimli kullanıdan gelen mail aşağıdaki gibidir.
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
        $this->email->subject("Smarty Kurumsal Eğitim Başvurusu");
        $this->email->message($mail_message);

        if ($this->email->send()){

            $this->session->set_userdata();
               echo "Talebiniz başarılı bir şekilde alınmıştır";

        }else {
            show_error($this->email->print_debugger());
        }
    }else{
        echo " Lütfen Formu kontrol ediniz.";
    }
}

}
