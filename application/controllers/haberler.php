<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Haberler extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("news_model");
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

        $haberler = $this->news_model->get_all();

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $viewData->categorys  = $category;
        $viewData->contact  = $contact;
        $viewData->news     = $haberler;

        $this->load->view('site/haberler',$viewData);
	}

    public function detay($id)
    {
        $viewData = new stdClass();

        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $news = $this->news_model->get_all();
        $haberler = $this->news_model->get(array("id" => $id));

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $viewData->categorys  = $category;

        $viewData->contact  = $contact;
        $viewData->news  = $news;
        $viewData->newss  = $haberler;

        $this->load->view('site/haberler/detay', $viewData);



    }
}