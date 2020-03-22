<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth'] = 'auth';
$route['admin'] = 'auth/cekLogin';
$route['logout'] = 'auth/logout';
$route['dashboard'] = 'admin/admin';
$route['slider'] = 'admin/slider';
$route['ubahProfile'] = 'admin/admin/ubahProfile';
$route['ubahPassword'] = 'admin/admin/ubahPass';
$route['slider/tambah'] = 'admin/slider/tambah';
$route['slider/kirim'] = 'admin/slider/index'; 
$route['produk'] = 'admin/produk';
$route['produk/tambah'] = 'admin/produk/tambah';
$route['produk/do/tambah'] = 'admin/produk/doTambah';
$route['produk/do/update'] = 'admin/produk/doUpdate';
$route['portofolio'] = 'admin/portofolio';
$route['portofolio/tambah'] = 'admin/portofolio/tambah';
$route['portofolio/do/tambah'] = 'admin/portofolio/doTambah';
$route['portofolio/do/update'] = 'admin/portofolio/doUpdate';
$route['client'] = 'admin/client';
$route['client/tambah'] = 'admin/client/tambah';
$route['client/do/tambah'] = 'admin/client/doTambah';
$route['client/do/update'] = 'admin/client/doUpdate';
$route['pelanggan'] = 'admin/pelanggan';
$route['setting'] = 'admin/setting';
$route['setting/tambah'] = 'admin/setting/tambah';
$route['setting/do/tambah'] = 'admin/setting/doTambah';
$route['setting/do/update'] = 'admin/setting/doUpdate';
$route['alur'] = 'admin/alur';
$route['alur/tambah'] = 'admin/alur/tambah';
$route['alur/do/tambah'] = 'admin/alur/doTambah';
$route['alur/do/update'] = 'admin/alur/doUpdate';
$route['alur/warna'] = 'admin/alur/warna';
$route['admini'] = 'admin/daftarAdmin';
$route['admin/tambah'] = 'admin/daftarAdmin/tambah';
$route['admini/do/tambah'] = 'admin/daftarAdmin/doTambah';