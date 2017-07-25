<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insan_kaynaklari_politikamiz extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("hurman_resources_model");
        $this->load->model("referans_model");
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



        $hurman_resorurces = $this->hurman_resources_model->get();

        $viewData->contact  = $contact;
        $viewData->categorys  = $category;
        $viewData->hurman_resorurces  = $hurman_resorurces;

        $this->load->view('site/insan_kaynaklari_politikamiz',$viewData);
	}
}
