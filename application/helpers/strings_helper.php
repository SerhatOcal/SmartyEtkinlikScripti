<?php

function getMessage($key){

    $message = array(
        'alert-success'         =>  'işlem Başarılı.',
        'alert-error'           =>  'işlem Başarısız.!',
        'alert-username'        =>  'Kullanıcı başırılı bir şekilde eklendi.',
        'mailSettingsError'     =>  'Lütfen mail ayarlarını kontrol ediniz.'
    );
    return $message[$key];
}

function get_day_from_eng($day){
    $days = array(
        "Mon"   => "Pazartesi",
        "Tue"   => "Salı",
        "Wed"   => "Çarşamba",
        "Thu"   => "Perşembe",
        "Fri"   => "Cuma",
        "Sat"   => "Cumartesi",
        "Sun"   => "Pazar"
    );
    return $days[$day];
}

function get_month_from_number($month){
    $months = array(
        "01"   => "Ocak",
        "02"   => "Şubat",
        "03"   => "Mart",
        "04"   => "Nisan",
        "05"   => "Mayıs",
        "06"   => "Haziran",
        "07"   => "Temmuz",
        "08"   => "Ağustos",
        "09"   => "Eylül",
        "10"   => "Ekim",
        "11"   => "Kasım",
        "12"   => "Aralık"
    );
    return $months[$month];
}

?>