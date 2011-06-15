<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//$route['default_controller'] = "freakauth";
$route['default_controller'] = "auth";
$route['scaffolding_trigger'] = "scaff";

$route['admin'] = "admin/adminhome";
$route['admin/users/:num'] = "admin/users";
$route['admin/admins/:num'] = "admin/admins";

/*this add new modul by ones0066@gmail.com*/
$route['admin/admins/:num'] = "admin/barangs";
$route['admin/admins/:num'] = "admin/barangs2";
?>
