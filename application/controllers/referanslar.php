<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referanslar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
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

        $aboutus = $this->referans_model->get_all();

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $viewData->categorys  = $category;
        $viewData->contact  = $contact;
        $viewData->referanss  = $aboutus;

        $this->load->view('site/referanslar',$viewData);
	}
}
