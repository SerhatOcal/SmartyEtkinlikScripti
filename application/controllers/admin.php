<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("slider_model");
        $this->load->model("training_model");
        $this->load->model("activity_category_model");
        $this->load->model("trainers_model");
        $this->load->model("aboutus_model");
        $this->load->model("referans_model");
        $this->load->model("hurman_resources_model");
        $this->load->model("news_model");
        $this->load->model("login_model");
        $this->load->model("userss_model");
        $this->load->model("newsletter_model");
        $this->load->model("activity_model");
        $this->load->model("email_setting_model");
    }

	public function index()
	{
		$this->load->view('admin/login');
	}
	//Login işlemleri Başlangıç
    public function dashboard()
    {
    	
        if ($this->session->userdata('is_logged_in'))
        {
            $query["news"] = $this->db->query("SELECT * FROM news ORDER BY id DESC LIMIT 1")->row_array();
            $query["trainers"] = $this->db->query("SELECT * FROM trainers ORDER BY id DESC LIMIT 1")->row_array();
            $query["training"] = $this->db->query("SELECT * FROM training ORDER BY id DESC LIMIT 1")->row_array();
            $query["activity"] = $this->db->query("SELECT * FROM activity ORDER BY id DESC LIMIT 1")->row_array();

            $this->load->view('admin',$query);
        }
        else
        {
            redirect(base_url('admin/login'));
        }

    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('username', 'Kullanıcı Adı', 'required|trim|xss_clean|alpha|min_length[3]|max_length[30]|callback_validate_control');
        $this->form_validation->set_rules('password', 'Şifre', 'required|trim|md5');

        if ($this->form_validation->run())
        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => 1
            );

            $this->session->set_userdata($data);
            redirect(base_url('admin/dashboard'));
        }
        else
        {
            $this->load->view('admin/login');
        }

    }

    public function validate_control()
    {
        if ($this->login_model->loginControl())
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('validate_control', 'Kullanıcı adı yada Şifre yanlış');
            return false;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    // Login işlemleri bitiş Şifre Yenileme Başlangıç

    public function reset_password_email()
    {
        $this->load->view('admin/reset_password_email');
    }

    public function forgot_validation()
    {
        $this->session->set_flashdata('item', 'information');

        $email = $this->input->post("email");

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|xss_clean');

        if ($this->form_validation->run()){

            $reset_key=md5(uniqid());

            if ($this->userss_model->update_reset_key($reset_key)) {

                $this->email->set_newline("\r\n");

                $this->email->from('smartybilisim@gmail.com', 'Smarty');
                $this->email->to($email);
                $this->email->subject("Smartybilisim.com Parola Sıfırlama");

                $message = "Lütfen Aşağıdaki linke tıklayarak yeni parolanızı giriniz!
                '" .base_url()."admin/reset_password/".$reset_key."'
                Linke Tılayarak Lütfen Parolanızı Yenileyiniz.
                ";

                $this->email->message($message);

                if ($this->email->send()){

                    $this->session->set_flashdata('item', 'Lütfen Email Adresinizi Kontrol Ediniz.' .$email);

                    redirect(base_url('admin/reset_password_email'));

                }else {
                    echo "Mail gönderilirken aşağıdaki hatalar ile karşılaşıldı.";
                    show_error($this->email->print_debugger());
                }
            }else   {
                echo "Böyle bir kullanıcı mevcut değil lütfen girmiş olduğunuz mail adresinizi kontrol ediniz.";
                redirect(base_url('admin/reset_password'));
            }
        }

    }

    public function reset_password()
    {
        $this->load->view('admin/reset_password');
    }

    public function reset_password_validation()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|xss_clean|min_length[3]|maches[password]');

        if ($this->form_validation->run())
        {
            if($this->userss_model->reset_password())
            {
                $this->session->set_flashdata('success', 'Şifreniz Başarıyla değiştirilmiştir.Lütfen yeni şifreniz ile giriş yapınız.');
                redirect(base_url('admin/login'));
            }
            else
            {
                $this->session->set_flashdata('error', 'Şifreniz değiştirilirken bir hata oluştu lütfen tekrar deneyiniz.');
                redirect(base_url('admin/reset_password'));

            }
        }
        else
        {
             $this->load->view('admin/reset_password');
        }
    }


//Şifre Yenileme işlemleri Bitiş Menü İşlemleri balangıç

    public function setActiveMenu()
    {
        $parent      = $this->input->post("parent");
        $activeItem  = $this->input->post("activeItem");

        $this->session->set_userdata(
            array(
                "parent" => $parent,
                "activeItem" => $activeItem
            )
        );
    }

	// Contact Başlangıç

    public function contact()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->contact_model->get_all(array(),"rank ASC");

        $this->load->view('admin/contact', $viewData);
    }

    public function new_contact()
    {
        $this->load->view('admin/add_contact');

    }

    public function add_contact(){

        if (isset($_POST)) {
            $img_id=str_replace(' ','',$_FILES["logofile"]["name"]);

        $data = array(
                "title" 		    => $this->input->post("title"),
                "address" 		    => $this->input->post("address"),
                "mission" 		    => $this->input->post("mission"),
                "vision" 		    => $this->input->post("vision"),
                "bank_account" 		=> $this->input->post("bank_account"),
                "mersis_id" 		=> $this->input->post("mersis_id"),
                "tax_circle" 		=> $this->input->post("tax_circle"),
                "tax_id" 		    => $this->input->post("tax_id"),
                "facebook" 		    => $this->input->post("facebook"),
                "twitter" 		    => $this->input->post("twitter"),
                "youtube" 		    => $this->input->post("youtube"),
                "instagram" 		=> $this->input->post("instagram"),
                "google_plus" 		=> $this->input->post("google_plus"),
                "linkedin" 		    => $this->input->post("linkedin"),
                "google_analytics" 	=> $this->input->post("google_analytics"),
                "phone" 		    => $this->input->post("phone"),
                "fax" 			    => $this->input->post("fax"),
                "email" 		    => $this->input->post("email"),
                "web" 		        => $this->input->post("web"),
                "about_us" 		    => $this->input->post("about_us"),
                "meta_description" 	=> $this->input->post("meta_description"),
                "meta_keyword" 		=> $this->input->post("meta_keyword"),
                "map_att" 		    => $this->input->post("map_att"),
                "google_latt" 		=> $this->input->post("google_latt"),
                "logo" 		        => $img_id,
                "isActive"		    => 0
            );

            $insert = $this->contact_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/$img_id")) {

                    echo "Dosya Seçilmedi...";

                    $config['upload_path']   = "./uploads/";
                    $config['allowed_types'] = 'png';
                    $config['max_size']      = 300;
                    $config['max_width']     = 126;
                    $config['max_height']    = 90;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('logofile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
            else{
                echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
            }
                redirect(base_url("admin/contact"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_contact"));
            }
        }
    }

    public function edit_page_contact($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->contact_model->get(array("id" => $id));

        $this->load->view('admin/edit_contact', $viewData);

    }

    public function edit_contact($id){

        if (isset($_POST)) {

            $contact = $this->contact_model->get(array("id" => $id));
            $img_db = $contact->logo;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["logofile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["logofile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["logofile"]["name"]);
                }else{
                    $img_id= $img_db;
                }
            }

            $data = array(
                "title" 		    => $this->input->post("title"),
                "address" 		    => $this->input->post("address"),
                "mission" 		    => $this->input->post("mission"),
                "vision" 		    => $this->input->post("vision"),
                "bank_account" 		=> $this->input->post("bank_account"),
                "mersis_id" 		=> $this->input->post("mersis_id"),
                "tax_circle" 		=> $this->input->post("tax_circle"),
                "tax_id" 		    => $this->input->post("tax_id"),
                "facebook" 		    => $this->input->post("facebook"),
                "twitter" 		    => $this->input->post("twitter"),
                "youtube" 		    => $this->input->post("youtube"),
                "instagram" 		=> $this->input->post("instagram"),
                "google_plus" 		=> $this->input->post("google_plus"),
                "linkedin" 		    => $this->input->post("linkedin"),
                "google_analytics" 	=> $this->input->post("google_analytics"),
                "phone" 		    => $this->input->post("phone"),
                "fax" 			    => $this->input->post("fax"),
                "email" 		    => $this->input->post("email"),
                "web" 		        => $this->input->post("web"),
                "about_us" 		    => $this->input->post("about_us"),
                "meta_description" 	=> $this->input->post("meta_description"),
                "meta_keyword" 		=> $this->input->post("meta_keyword"),
                "map_att" 		    => $this->input->post("map_att"),
                "google_latt" 		=> $this->input->post("google_latt"),
                "logo" 		        => $img_id,
                "isActive"		    => 0
            );

            $update = $this->contact_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/$img_id")) {

                    echo "Dosya Seçilmedi...";

                    $config['upload_path']   = "./uploads/";
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = 600;
                    $config['max_width']     = 1024;
                    $config['max_height']    = 768;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('logofile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
                else{
                    echo "";
                }
                redirect(base_url("admin/contact"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );

                redirect(base_url("admin/new_contact"));
            }
        }
    }

    public function delete_contact($id){

        $delete = $this->contact_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/contact/list"));

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

    public function isActiveSetter(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->contact_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );

    }

    // Contact Bitiş // Slider Başlangıç

    public function slider(){

        $viewData = new stdClass();
        $viewData->rows = $this->slider_model->get_all(array(),"rank ASC");

        $this->load->view('admin/slider', $viewData);
    }

    public function new_slider()
    {
        $this->load->view('admin/add_slider');
    }

    public function add_slider(){

        if (isset($_POST)) {
            $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            $button = ($this->input->post("button")== "on") ? 1 : 0;

            $data = array(
                "title" 		=> $this->input->post("title"),
                "detail" 		=> $this->input->post("detail"),
                "bride_detail" 	=> $this->input->post("bride_detail"),
                "url" 		    => $this->input->post("url"),
                "button" 		=> $button,
                "button_title"  => $this->input->post("button_title"),
                "image" 		=> $img_id,
                "isActive"		=> 0
            );


            $insert = $this->slider_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/$img_id")) {

                    $config['upload_path']   = "./uploads/slider";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
                else{
                    echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
                }
                redirect(base_url("admin/slider"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_slider"));
            }
        }
    }

    public function isActiveSetterSlider(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->slider_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function isActiveSetterSliderButon(){

        $id 	  = $this->input->post("id");
        $button = ($this->input->post("button") == "true") ? 1 : 0;

        $update = $this->slider_model->update(
            array("id" => $id),
            array("button" => $button)
        );
    }

    public function delete_slider($id){

        $delete = $this->slider_model->delete(array("id" => $id));

        if ($delete){


            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/slider/list"));

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

    public function sliderRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->slider_model->update(
                    array(
                        "id"      => $id,
                        "rank !=" => $rank
                        ),
                    array("rank" => $rank)
            );
        }

    }

    public function contactRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->contact_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function edit_page_slider($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->slider_model->get(array("id" => $id));

        $this->load->view('admin/edit_slider', $viewData);

    }

    public function edit_slider($id){

        if (isset($_POST)) {

            //database en img id dolu degilse

            $slider = $this->slider_model->get(array("id" => $id));
            $img_db = $slider->image;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["imagefile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
                }else{
                    $img_id= $img_db;
                }


            }

            $button = ($this->input->post("button")== "on") ? 1 : 0;

            $data = array(
                "title" 		=> $this->input->post("title"),
                "detail" 		=> $this->input->post("detail"),
                "bride_detail" 	=> $this->input->post("bride_detail"),
                "url" 		    => $this->input->post("url"),
                "button_title"  => $this->input->post("button_title"),
                "button" 		=> $button,
                "image" 		=> $img_id,
            );

            $update = $this->slider_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/slider/$img_id")) {

                    $config['upload_path']   = "./uploads/slider";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
                    $config['max_width']     = 1920;
                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $data = array('upload_data' => $this->upload->data());

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }

                redirect(base_url("admin/slider"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_slider/$id"));
            }
        }
    }

    // Slider Bitiş // Site Ayarları Başlangıç

    public function settings(){

        $this->load->view('admin/settings');
    }

    // Site Ayarları Bitiş // Mail Ayarları Başlangıç

    public function email()
    {

        $viewData = new stdClass();
        $viewData->emailsettings = $this->email_setting_model->get_all(array("isActive"=>1));


        $this->load->view('admin/email_setting', $viewData);
    }

    public function isActiveSetterEmail()
    {

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->email_setting_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function delete_email($id){

        $delete = $this->email_setting_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/email/list"));

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

    public function new_email()
    {
        $this->load->view('admin/add_email');
    }

    public function add_email(){

        $data = array(

            "protocol"  => $this->input->post("protocol"),
            "host"      => $this->input->post("host"),
            "port"      => $this->input->post("port"),
            "user"      => $this->input->post("user"),
            "userName"  => $this->input->post("userName"),
            "pass"      => $this->input->post("pass"),
            "from"      => $this->input->post("from"),
            "to"        => $this->input->post("to"),
            "isActive"  => 1
        );

        $insert = $this->email_setting_model->add($data);

        if ($insert) {

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );
            redirect(base_url("admin/email"));
        }
        else{

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-error"),
                    "alert-type" => "error"
                )
            );
            redirect(base_url("admin/new_email"));
        }
    }

    public function edit_page_email($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->email_setting_model->get(array("id" => $id));

        $this->load->view('admin/edit_email', $viewData);

    }

    public function edit_email($id){

            $data = array(

                "protocol"  => $this->input->post("protocol"),
                "host"      => $this->input->post("host"),
                "port"      => $this->input->post("port"),
                "user"      => $this->input->post("user"),
                "userName"  => $this->input->post("userName"),
                "pass"      => $this->input->post("pass"),
                "from"      => $this->input->post("from"),
                "to"        => $this->input->post("to"),
            );

            $update = $this->email_setting_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("admin/email"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_email/$id"));
            }
    }

    // Mail Ayarları Bitiş // Eğitim Ayarları Başlangıç

    public function training(){

        $viewData = new stdClass();
        $viewData->rows = $this->training_model->get_all();

        $this->load->view('admin/training', $viewData);
    }

    public function new_training()
    {
        $this->load->view('admin/add_training');
    }

    public function add_training(){

        $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);


        $data = array(

            "title"        => $this->input->post("title"),
            "detail"       => $this->input->post("detail"),
            "bride_detail" => $this->input->post("bride_detail"),
            "information"  => $this->input->post("information"),
            "feature"      => $this->input->post("feature"),
            "keyword"      => $this->input->post("keyword"),
            "image"        => $img_id
        );

        $insert = $this->training_model->add($data);

        if ($insert) {

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            if (!is_file("uploads/$img_id")) {

                $config['upload_path']   = "./uploads/training";
                $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                $config['file_name']     = $img_id;
                $config['overwrite']     = true;
                $config['encrypt_name']  = true;

                $this->load->library('upload', $config);

                $upload = $this->upload->do_upload('imagefile');

                if ($upload) {

                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
                else {

                    $data = array('upload_data' => $this->upload->data());
                    print_r($data);
                }
            }
            else{
                echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
            }

            redirect(base_url("admin/training"));
        }
        else{

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-error"),
                    "alert-type" => "error"
                )
            );
            redirect(base_url("admin/new_training"));
        }
}

    public function edit_page_training($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->training_model->get(array("id" => $id));

        $this->load->view('admin/edit_training', $viewData);

    }

    public function delete_training($id){

        $delete = $this->training_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/training/list"));

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

    public function edit_training($id){

        if (isset($_POST)) {
            //database en img id dolu degilse
            $training = $this->training_model->get(array("id" => $id));
            $img_db = $training->image;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["imagefile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
                }else{
                    $img_id= $img_db;
                }
            }

            $data = array(
                "title"        => $this->input->post("title"),
                "detail"       => $this->input->post("detail"),
                "bride_detail" => $this->input->post("bride_detail"),
                "information"  => $this->input->post("information"),
                "feature"      => $this->input->post("feature"),
                "keyword"      => $this->input->post("keyword"),
                "image"        => $img_id
            );

            $update = $this->training_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/training/$img_id")) {

                    $config['upload_path']   = "./uploads/training";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $data = array('upload_data' => $this->upload->data());

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }

                redirect(base_url("admin/training"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_training/$id"));
            }
        }
    }

    // Eğitim Ayarları Bitiş // Etkinlik Kategori Ayarları Başlangıç

    public function activity_category()
    {

        $viewData = new stdClass();
        $viewData->rows = $this->activity_category_model->get_all(array(),"rank ASC");

        $this->load->view('admin/activity_category',$viewData);
    }

    public function categoryRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->activity_category_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function isActiveSetterActivityCatgory(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->activity_category_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function activity_category_delete($id)
    {

        $delete = $this->activity_category_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/activity_category/list"));

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

    public function new_activity_category()
    {
        $this->load->view('admin/add_activity_category');
    }

    public function add_activity_category(){

        $data = array(

            "title"     => $this->input->post("title"),
        );

        $insert = $this->activity_category_model->add($data);

        if ($insert) {

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/activity_category"));
        }
        else{

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-error"),
                    "alert-type" => "error"
                )
            );
            redirect(base_url("admin/new_activity_category"));
        }
    }

    public function edit_page_activity_category($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->activity_category_model->get(array("id" => $id));

        $this->load->view('admin/edit_activity_category', $viewData);

    }

    public function edit_activity_category($id){

            $data = array(
                "title"        => $this->input->post("title"),
            );

            $update = $this->activity_category_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("admin/activity_category"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
            redirect(base_url("admin/edit_page_activity_category/$id"));
        }
    }

    // Etkinlik Ayarları Bitiş // Eğitmen Ayarları Başlangıç

    public function trainers(){

        $viewData = new stdClass();
        $viewData->rows = $this->trainers_model->get_all(array(),"rank ASC");

        $this->load->view('admin/trainers', $viewData);
    }

    public function trainersRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->trainers_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function isActiveSetterTrainers(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->trainers_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function trainers_delete($id){

        $delete = $this->trainers_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/trainers/list"));

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

    public function new_trainers()
    {
        $this->load->view('admin/add_trainers');
    }

    public function add_trainers(){

        if (isset($_POST)) {

            $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);

            $data = array(
                "trainersName" 	=> $this->input->post("trainersName"),
                "detail" 		=> $this->input->post("detail"),
                "image" 		=> $img_id,
            );

            $insert = $this->trainers_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/$img_id")) {

                    $config['upload_path']   = "./uploads/trainers";
                    $config['allowed_types'] = 'jpg';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
                else{
                    echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
                }
                redirect(base_url("admin/trainers"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_trainers"));
            }
        }
    }

    public function edit_page_trainers($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->trainers_model->get(array("id" => $id));

        $this->load->view('admin/edit_trainers', $viewData);

    }

    public function edit_trainers($id){

        if (isset($_POST)) {

            //database en img id dolu degilse

            $trainersName = $this->trainers_model->get(array("id" => $id));
            $img_db = $trainersName->image;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["imagefile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
                }else{
                    $img_id= $img_db;
                }
            }

            $data = array(
                "trainersName" 	=> $this->input->post("trainersName"),
                "detail" 		=> $this->input->post("detail"),
                "image" 		=> $img_id,
            );

            $update = $this->trainers_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/trainers/$img_id")) {

                    $config['upload_path']   = "./uploads/trainers";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
                    $config['max_width']     = 1920;
                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $data = array('upload_data' => $this->upload->data());

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }

                redirect(base_url("admin/trainers"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_trainers/$id"));
            }
        }
    }

    // Eğitmen Ayarları Bitiş // Hakkımızda Ayarları Başlangıç


    public function aboutus()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->aboutus_model->get_all();

        $this->load->view('admin/aboutus', $viewData);
    }

    public function new_aboutus()
    {
        $this->load->view('admin/add_aboutus');
    }

    public function add_aboutus(){

        $data = array(

            "aboutus"        => $this->input->post("aboutus"),
        );



        $insert = $this->aboutus_model->add($data);

        if ($insert) {

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/aboutus"));
        }
        else{

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-error"),
                    "alert-type" => "error"
                )
            );
            redirect(base_url("admin/new_aboutus"));
        }
    }

    public function aboutus_delete($id){

        $delete = $this->aboutus_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/aboutus/list"));

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

    public function edit_page_aboutus($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->aboutus_model->get(array("id" => $id));

        $this->load->view('admin/edit_aboutus', $viewData);

    }

    public function edit_aboutus($id){

            $data = array(

                "aboutus"   => $this->input->post("aboutus"),
            );

            $update = $this->aboutus_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("admin/aboutus"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_aboutus/$id"));
            }
    }

    // Hakkımızda Ayarları Bitiş // Referans Ayarları Başlangıç

    public function referans()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->referans_model->get_all(array(), "rank ASC");

        $this->load->view('admin/referans', $viewData);
    }

    public function referansRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->referans_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function isActiveSetterReferans(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->referans_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function referans_delete($id){

        $delete = $this->referans_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/referans/list"));

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

    public function new_referans()
    {
        $this->load->view('admin/add_referans');
    }

    public function add_referans(){

        if (isset($_POST)) {

            $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);

            $data = array(
                "name" 	=> $this->input->post("name"),
                "weblink" 		=> $this->input->post("weblink"),
                "detail" 		=> $this->input->post("detail"),
                "image" 		=> $img_id,
            );

            $insert = $this->referans_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/referans/$img_id")) {

                    $config['upload_path']   = "./uploads/referans";
                    $config['allowed_types'] = 'jpg';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
                else{
                    echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
                }
                redirect(base_url("admin/referans"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_referans"));
            }
        }
    }

    public function edit_page_referans($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->referans_model->get(array("id" => $id));

        $this->load->view('admin/edit_referans', $viewData);

    }

    public function edit_referans($id){

        if (isset($_POST)) {

            //database en img id dolu degilse

            $referans = $this->referans_model->get(array("id" => $id));
            $img_db = $referans->image;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["imagefile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
                }else{
                    $img_id= $img_db;
                }
            }

            $data = array(
                "name" 	=> $this->input->post("name"),
                "weblink" 		=> $this->input->post("weblink"),
                "detail" 		=> $this->input->post("detail"),
                "image" 		=> $img_id,
            );

            $update = $this->referans_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/referans/$img_id")) {

                    $config['upload_path']   = "./uploads/referans";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
                    $config['max_width']     = 1920;
                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $data = array('upload_data' => $this->upload->data());

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }

                redirect(base_url("admin/referans"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_referans/$id"));
            }
        }
    }

    // Referans Ayarları Bitiş // İnsan Kaynakları Ayarları Başlangıç

    public function hurman_resources()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->hurman_resources_model->get_all(array());

        $this->load->view('admin/hurman_resources', $viewData);
    }

    public function new_hurman_resources()
    {
        $this->load->view('admin/add_hurman_resources');
    }

    public function add_hurman_resources(){

        if (isset($_POST)) {

            $data = array(
                "title" 	=> $this->input->post("title"),
                "detail" 		=> $this->input->post("detail"),
            );

            $insert = $this->hurman_resources_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("admin/hurman_resources"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_hurman_resources"));
            }
        }
    }

    public function hurman_resources_delete($id){

        $delete = $this->hurman_resources_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/hurman_resources/list"));

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

    public function edit_page_hurman_resources($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->hurman_resources_model->get(array("id" => $id));

        $this->load->view('admin/edit_hurman_resources', $viewData);

    }

    public function edit_hurman_resources($id){

        if (isset($_POST)) {

            $data = array(
                "title" 	=> $this->input->post("title"),
                "detail" 		=> $this->input->post("detail"),
            );

            $update = $this->hurman_resources_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                redirect(base_url("admin/hurman_resources"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_hurman_resources/$id"));
            }
        }
    }

    // İnsan Kaynakları Ayarları Bitiş // Haber Ayarları Başlangıç

    public function news()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->news_model->get_all(array(),"rank ASC");

        $this->load->view('admin/news', $viewData);
    }

    public function newsRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->news_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function isActiveSetterNews(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->news_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function news_delete($id){

        $delete = $this->news_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/news/list"));

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

    public function new_news()
    {
        $this->load->view('admin/add_news');
    }

    public function add_news(){

        if (isset($_POST)) {

            $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);

            $data = array(
                "title" 	=> $this->input->post("title"),
                "date" 		=> $this->input->post("date"),
                "detail" 	=> $this->input->post("detail"),
                "weblink" 	=> $this->input->post("weblink"),
                "image" 	=> $img_id,
            );

            $insert = $this->news_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/referans/$img_id")) {

                    $config['upload_path']   = "./uploads/news";
                    $config['allowed_types'] = 'jpg';
//                    $config['max_size']      = 600;
//                    $config['max_width']     = 1920;
//                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }
                else{
                    echo "Bu dosya zaten yükle lütfen uploads kılasörünü kontrol ediniz. ";
                }
                redirect(base_url("admin/news"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_news"));
            }
        }
    }

    public function edit_page_news($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->news_model->get(array("id" => $id));

        $this->load->view('admin/edit_news', $viewData);

    }

    public function edit_news($id){

        if (isset($_POST)) {

            //database en img id dolu degilse

            $referans = $this->news_model->get(array("id" => $id));
            $img_db = $referans->image;

            if(!$img_db){//db de kayit varsa
                $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
            }else{// yoksa bu sefer resmin degisip degismedigine bakmak lazim..
                $img_form = str_replace(' ','',$_FILES["imagefile"]["name"]);
                if($img_form != "" && $img_form != $img_db){
                    $img_id=str_replace(' ','',$_FILES["imagefile"]["name"]);
                }else{
                    $img_id= $img_db;
                }
            }

            $data = array(
                "title" 	=> $this->input->post("title"),
                "date" 		=> $this->input->post("date"),
                "detail" 	=> $this->input->post("detail"),
                "weblink" 	=> $this->input->post("weblink"),
                "image" 	=> $img_id,
            );


            $update = $this->news_model->update(
                array("id"	=> $id),
                $data
            );

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );

                if (!is_file("uploads/news/$img_id")) {

                    $config['upload_path']   = "./uploads/news";
                    $config['allowed_types'] = 'gif|jpg|png';
//                    $config['max_size']      = 600;
                    $config['max_width']     = 1920;
                    $config['max_height']    = 700;
                    $config['file_name']     = $img_id;
                    $config['overwrite']     = true;
                    $config['encrypt_name']  = true;

                    $this->load->library('upload', $config);

                    $upload = $this->upload->do_upload('imagefile');

                    if ($upload) {

                        $data = array('upload_data' => $this->upload->data());

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    else {

                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                    }
                }

                redirect(base_url("admin/news"));
            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_news/$id"));
            }
        }    }

    // Haber Ayarları Bitiş // Kullanıcı Ayarları Başlangıç

    public function users()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->userss_model->get_all();

        $this->load->view('admin/users', $viewData);
    }

    public function isActiveSetterUsers(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1  : 0;

        $update = $this->userss_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function users_delete($id){

        $delete = $this->userss_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/users/list"));

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

    public function edit_page_users($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->userss_model->get(array("id" => $id));

        $this->load->view('admin/edit_users', $viewData);

    }

    public function edit_users($id){

        if (isset($_POST)) {

            $data = array(
                "username" 	=> $this->input->post("username"),
                "password" 	=> md5($this->input->post("password")),
                "email" 	=> $this->input->post("email"),
            );


            $update = $this->userss_model->update(array("id"	=> $id), $data);

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/users"));
            }
            else
            {
                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_users/$id"));
            }
        }
    }

    public function new_users()
    {
        $this->load->view('admin/add_users');
    }

    public function add_users(){

        if (isset($_POST)) {

            $data = array(
                "username" 	=> $this->input->post("username"),
                "password" 	=> $this->input->post("password"),
                "email" 	=> $this->input->post("email"),
            );

            $insert = $this->userss_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/users"));

            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_users"));
            }
        }
    }

    // Kullanıcı Ayarları Bitiş // Haber Bülteni Kayıt Ayarları Başlangıç


    public function newsletter()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->newsletter_model->get_all();

        $this->load->view('admin/newsletter', $viewData);
    }

    public function new_newsletter()
    {
        $this->load->view('admin/add_newsletter');

    }

    public function add_newsletter(){

        if (isset($_POST)) {


            $data = array(
                "email" 	=> $this->input->post("email"),
                "isActive" 	=> 0,
            );
            $insert = $this->newsletter_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/newsletter"));

            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_newsletter"));
            }
        }
    }

    public function edit_page_newsletter($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->newsletter_model->get(array("id" => $id));

        $this->load->view('admin/edit_newsletter', $viewData);

    }

    public function edit_newsletter($id){

        if (isset($_POST)) {

            $data = array(
                "email" 	=> $this->input->post("email"),
                "isActive" 	=> 0,
            );


            $update = $this->newsletter_model->update(array("id"	=> $id), $data);

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/newsletter"));
            }
            else
            {
                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_newsletter/$id"));
            }
        }
    }

    public function delete_newsletter($id){

        $delete = $this->newsletter_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/newsletter/list"));

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

    // Haber Bülten Ayarları Bitiş // Etkinlik Ayarları Başlangıç

    public function activity()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->activity_model->get_all(array(),"rank ASC");

        $activity_categories = $this->activity_category_model->get_all(
            array(
                "isActive" => 1
            )
        );

        $activity_trainingies = $this->training_model->get_all();

        $activity_trainersies = $this->trainers_model->get_all(
            array(
                "isActive" => 1
            )
        );



        $activity_categories_list = array();

        foreach ($activity_categories as $activity_category) {

            $activity_categories_list[$activity_category->id] = $activity_category->title;

        }

        $activity_training_list = array();

        foreach ($activity_trainingies as $activity_training) {

            $activity_training_list[$activity_training->id] = $activity_training->title;

        }

        $activity_trainers_list = array();

        foreach ($activity_trainersies as $activity_trainers) {

            $activity_trainers_list[$activity_trainers->id] = $activity_trainers->trainersName;

        }

        $viewData->activity_categories = $activity_categories;
        $viewData->activity_categories_list = $activity_categories_list;
        $viewData->activity_trainingies = $activity_trainingies;
        $viewData->activity_training_list = $activity_training_list;
        $viewData->activity_trainersies = $activity_trainersies;
        $viewData->activity_trainers_list = $activity_trainers_list;

        $this->load->view('admin/activity',$viewData);
    }

    public function isActiveSetterActivity(){

        $id 	  = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->activity_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );
    }

    public function activityRankUpdate(){

        parse_str($this->input->post("data"), $data);

        $items = $data ["sortID"];

        foreach ( $items as $rank => $id){

            $this->activity_model->update(
                array(
                    "id"      => $id,
                    "rank !=" => $rank
                ),
                array("rank" => $rank)
            );
        }

    }

    public function new_activity()
    {
        $this->load->view('admin/add_activity');

    }

    public function add_activity(){

        if (isset($_POST)) {


            $data = array(
                "title" 	            => $this->input->post("title"),
                "start_date" 	        => $this->input->post("start_date"),
                "stop_date" 	        => $this->input->post("stop_date"),
                "maps" 	                => $this->input->post("maps"),
                "price" 	            => $this->input->post("price"),
                "address" 	            => $this->input->post("address"),
                "detail" 	            => $this->input->post("detail"),
                "activity_category_id" => $this->input->post("activity_category_id"),
                "training_id" 	        => $this->input->post("training_id"),
                "trainers_id" 	        => $this->input->post("trainers_id"),
                "isActive" 	            => 1,
            );

            $insert = $this->activity_model->add($data);

            if ($insert) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/activity"));

            }
            else{

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/new_activity"));
            }
        }
    }

    public function delete_activity($id){

        $delete = $this->activity_model->delete(array("id" => $id));

        if ($delete){

            $this->session->set_userdata(
                array(
                    "alert" => true,
                    "alert-message" => getMessage("alert-success"),
                    "alert-type" => "success"
                )
            );

            redirect(base_url("admin/activity/list"));

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

    public function edit_page_activity($id)
    {

        $viewData = new stdClass();

        $viewData->row = $this->activity_model->get(array("id" => $id));

        $this->load->view('admin/edit_activity', $viewData);

    }

    public function edit_activity($id){

        if (isset($_POST)) {

            $data = array(
                "title" 	            => $this->input->post("title"),
                "start_date" 	        => $this->input->post("start_date"),
                "stop_date" 	        => $this->input->post("stop_date"),
                "maps" 	                => $this->input->post("maps"),
                "price" 	            => $this->input->post("price"),
                "address" 	            => $this->input->post("address"),
                "detail" 	            => $this->input->post("detail"),
                "activity_category_id" => $this->input->post("activity_category_id"),
                "training_id" 	        => $this->input->post("training_id"),
                "trainers_id" 	        => $this->input->post("trainers_id"),
                "isActive" 	            => 0,
            );


            $update = $this->activity_model->update(array("id"	=> $id), $data);

            if ($update) {

                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-success"),
                        "alert-type" => "success"
                    )
                );
                redirect(base_url("admin/activity"));
            }
            else
            {
                $this->session->set_userdata(
                    array(
                        "alert" => true,
                        "alert-message" => getMessage("alert-error"),
                        "alert-type" => "error"
                    )
                );
                redirect(base_url("admin/edit_page_activity/$id"));
            }
        }
    }

    // Etkinlik Ayarları Bitiş // İletişim Sayfası Ayarları Başlangıç

}
?>