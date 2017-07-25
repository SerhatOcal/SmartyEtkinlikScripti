<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etkinlikler extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model("contact_model");
        $this->load->model("trainers_model");
        $this->load->model("training_model");
        $this->load->model("activity_model");
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

        $activitys = $this->activity_model->get_all(
            array(
                "isActive" => 1
            )
        );

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $activity_trainersies = $this->trainers_model->get_all(
            array(
                "isActive" => 1
            )
        );

        $activity_trainings = $this->training_model->get_all();


        $activity_categories = $this->activity_category_model->get_all(array("isActive" => 1));

        $activity_categories_list = array();

        foreach ($activity_categories as $activity_category) {

            $activity_categories_list[$activity_category->id] = $activity_category;

        }


        $activity_training_list = array();

        foreach ($activity_trainings as $activity_training) {

            $activity_training_list[$activity_training->id] = $activity_training;

        }

        $activity_trainers_list = array();

        foreach ($activity_trainersies as $activity_trainers) {

            $activity_trainers_list[$activity_trainers->id] = $activity_trainers;

        }



        $viewData->categorys  = $category;
        $viewData->activity_trainersies = $activity_trainersies;
        $viewData->activity_trainers_list = $activity_trainers_list;
        $viewData->activity_trainings = $activity_trainings;
        $viewData->activity_training_list = $activity_training_list;
        $viewData->activity_categories = $activity_categories;
        $viewData->activity_categories_list = $activity_categories_list;
        $viewData->contact    = $contact;
        $viewData->activitys  = $activitys;

        $this->load->view('site/etkinlikler',$viewData);
	}

    public function detay($id)
    {
        $viewData = new stdClass();
        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );


        $activity = $this->activity_model->get(
            array(
                "isActive" => 1,
                "id" => $id
            )
        );

        $category = $this->activity_category_model->get_all(array(),"id ASC");


        $activity_trainings = $this->training_model->get_all();

        $activity_training_list = array();

        foreach ($activity_trainings as $activity_training) {

            $activity_training_list[$activity_training->id] = $activity_training;

        }

        $activity_trainersies = $this->trainers_model->get_all();


        $activity_trainers_list = array();

        foreach ($activity_trainersies as $activity_trainers) {

            $activity_trainers_list[$activity_trainers->id] = $activity_trainers;

        }



        $viewData->categorys  = $category;
        $viewData->contact  = $contact;
        $viewData->activitys  = $activity;
        $viewData->activity_trainings = $activity_trainings;
        $viewData->activity_training_list = $activity_training_list;
        $viewData->activity_trainers = $activity_trainersies;
        $viewData->activity_trainers_list = $activity_trainers_list;



        $this->load->view('site/etkinlikler/detay', $viewData);

    }

    public function etkinliklistesi($id)
    {
        $viewData = new stdClass();

        $contact              = $this->contact_model->get(array("isActive" => 1));
        $category             = $this->activity_category_model->get_all(array(), "id ASC");
        $activitys            = $this->activity_model->get_all(array("activity_category_id" => $id, "isActive" => 1), "rank ASC");
        $activity_trainings   = $this->training_model->get_all();
        $activity_categories  = $this->activity_category_model->get_all(array("isActive" => 1,));
        $activity_categoriler = $this->activity_category_model->get(array("isActive" => 1,"id" => $id),"id ASC", array("name"));
        $activity_trainersies = $this->trainers_model->get_all(array("isActive" => 1));

        $activity_training_list = array();

        foreach ($activity_trainings as $activity_training) {

            $activity_training_list[$activity_training->id] = $activity_training;

        }

        $activity_categories_list = array();

        foreach ($activity_categories as $activity_category) {

            $activity_categories_list[$activity_category->id] = $activity_category;

        }

        $activity_trainers_list = array();

        foreach ($activity_trainersies as $activity_trainers) {

            $activity_trainers_list[$activity_trainers->id] = $activity_trainers;

        }

        $viewData->contact    = $contact;
        $viewData->categorys    = $category;
        $viewData->activitys  = $activitys;
        $viewData->activity_trainings = $activity_trainings;
        $viewData->activity_training_list = $activity_training_list;
        $viewData->activity_categories = $activity_categories;
        $viewData->activity_categories_list = $activity_categories_list;
        $viewData->activity_trainersies = $activity_trainersies;
        $viewData->activity_trainers_list = $activity_trainers_list;
        $viewData->category = $activity_categoriler;

        $this->load->view('site/etkinliklistesi',$viewData);
    }

}