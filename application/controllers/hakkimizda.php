<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("aboutus_model");
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
        $aboutus = $this->aboutus_model->get();
        $viewData->contact  = $contact;
        $viewData->aboutuss  = $aboutus;

        $this->load->view('site/hakkimizda',$viewData);
	}
}