<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "home";
$route['404_override'] = '';

$route["admin"]                                = "admin/index";
$route["admin/(.*)"]                           = "admin/$1";

$route["home"]                                 = "home/index";
$route["home/(.*)"]                            = "home/$1";

$route["egitimler"]                            = "egitimler/index";
$route["egitimler/(.*)"]                       = "egitimler/$1";

$route["hakkimizda"]                           = "hakkimizda/index";
$route["hakkimizda/(.*)"]                      = "hakkimizda/$1";

$route["referanslar"]                          = "referanslar/index";
$route["referanslar/(.*)"]                     = "referanslar/$1";

$route["insan_kaynaklari_politikamiz"]         = "insan_kaynaklari_politikamiz/index";
$route["insan_kaynaklari_politikamiz/(.*)"]    = "insan_kaynaklari_politikamiz/$1";

$route["user"]                                 = "user/index";
$route["user/(.*)"]                            = "user/$1";

$route["haberler"]                             = "haberler/index";
$route["haberler/(.*)"]                        = "haberler/$1";

$route["iletisim"]                             = "iletisim/index";
$route["iletisim/(.*)"]                        = "iletisim/$1";

$route["egitmen_basvurusu"]                    = "egitmen_basvurusu/index";
$route["egitmen_basvurusu/(.*)"]               = "egitmen_basvurusu/$1";

$route["etkinlikler"]                          = "etkinlikler/index";
$route["etkinlikler/(.*)"]                     = "etkinlikler/$1";

$route["etkinlikler_list"]                          = "etkinlikler_list/index";
$route["etkinlikler_list/(.*)"]                     = "etkinlikler_list/$1";


$route["header"]                               = "header/index";
$route["header/(.*)"]                          = "header/$1";

$route["cart"]                               = "cart/index";
$route["cart/(.*)"]                          = "cart/$1";


$route["^(.*)"]    = "index/$1";



/* End of file routes.php */
/* Location: ./application/config/routes.php */