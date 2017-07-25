<?php

    function get_activity_category()
    {
    $CI = &get_instance();
    $CI->load->model("activity_category_model");
    return $CI->activity_category_model->get_all();
    }

    function get_training()
    {
    $CI = &get_instance();
    $CI->load->model("training_model");
    return $CI->training_model->get_all( );
    }

    function get_trainers()
    {
    $CI = &get_instance();
    $CI->load->model("trainers_model");
    return $CI->trainers_model->get_all();
    }

    function get_full_date_from_full_date($date)
    {
        //2016-12-06 16:47:28
        $date_ = explode(" ", $date);
        $date  = $date_[0];
        $full_date = explode("-", $date);

        return $full_date[2] . " " . get_month_from_number($full_date[1]) . " " . $full_date[0];

    }

    function get_full_date_clock($date)
    {
//        2016-12-06 16:47:28

        $date_parcala = explode(" ",$date);
        $date = $date_parcala[1];
        $full_date = explode(":", $date);

        return $full_date[0].":".$full_date[1];
    }

    function date_day($date)
    {

        $gunler = array("Pazar","Pazartesi","Salı",
            "Çarşamba","Perşembe","Cuma",
            "Cumartesi");

        # Once verılen tarıhı parcala ve unix zamanı bul
        $date = explode("-",$date);
        $date = mktime(0,0,0,$date[1],$date[2],$date[0]);


        # Sonra bu zamanı kullanarak
        # yılı,ay,gun ve haftanın gununu bul
        $date = date("Y-n-j-w",$date);
        $date = explode("-",$date);

        $date = $gunler[$date[3]];

        # Sonucu dondur
        return $date;
    }

?>