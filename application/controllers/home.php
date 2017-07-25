<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("activity_category_model");
        $this->load->model("slider_model");
        $this->load->model("referans_model");
        $this->load->model("activity_model");
        $this->load->model("news_model");

    }
	public function index()
	{
        $viewData = new stdClass();

        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $slider = $this->slider_model->get_all(array(),"rank ASC");

        $referans = $this->referans_model->get_all();

        $category = $this->activity_category_model->get_all(array(),"id ASC");

        $activity = $this->activity_model->get_all(
            array(
                "isActive" => 1
            )
        );
        $news = $this->news_model->get_all(
            array(
                "isActive" => 1
            )
        );


        $viewData->categorys  = $category;
        $viewData->news  = $news;
        $viewData->activitys  = $activity;
        $viewData->contact  = $contact;
        $viewData->sliders  = $slider;
        $viewData->referanss  = $referans;

        $this->load->view('home',$viewData);
	}

}