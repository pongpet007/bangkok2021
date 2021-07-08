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

///// For Content Controller//////////

///// Home ///// 

$route['(TH|th)\/Home'] = 'Home';
$route['(US|us)\/Home'] = 'Home';
$route['(KH|kh)\/Home'] = 'Home';
$route['(LA|la)\/Home'] = 'Home';
$route['(MM|mm)\/Home'] = 'Home';
$route['(VN|vn)\/Home'] = 'Home';

$route['(TH|th)\/Home\/index'] = 'Home/index/$1';
$route['(US|us)\/Home\/index'] = 'Home/index/$1';
$route['(KH|kh)\/Home\/index'] = 'Home/index/$1';
$route['(LA|la)\/Home\/index'] = 'Home/index/$1';
$route['(MM|mm)\/Home\/index'] = 'Home/index/$1';
$route['(VN|vn)\/Home\/index'] = 'Home/index/$1';

$route['(TH|th)\/Home\/index3'] = 'Home/index3';



// $route['(TH|th)\/About'] = 'About/index';
$route['(TH|th)\/About'] = 'About/index/$1';
$route['(US|us)\/About'] = 'About/index/$1';
$route['(KH|kh)\/About'] = 'About/index/$1';
$route['(LA|la)\/About'] = 'About/index/$1';
$route['(MM|mm)\/About'] = 'About/index/$1';
$route['(VN|vn)\/About'] = 'About/index/$1';


$route['(TH|th)\/Home\/stat'] = 'Home/stat';
$route['(US|us)\/Home\/stat'] = 'Home/stat';
$route['(KH|kh)\/Home\/stat'] = 'Home/stat';
$route['(LA|la)\/Home\/stat'] = 'Home/stat';
$route['(MM|mm)\/Home\/stat'] = 'Home/stat';
$route['(VN|vn)\/Home\/stat'] = 'Home/stat';





$route['(TH|th)\/Home\/subscription'] = 'Home/subscription';
$route['(US|us)\/Home\/subscription'] = 'Home/subscription';
$route['(KH|kh)\/Home\/subscription'] = 'Home/subscription';
$route['(LA|la)\/Home\/subscription'] = 'Home/subscription';
$route['(MM|mm)\/Home\/subscription'] = 'Home/subscription';
$route['(VN|vn)\/Home\/subscription'] = 'Home/subscription';





///// User ///// 
$route['(TH|th)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(US|us)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(KH|kh)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(LA|la)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(MM|mm)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(VN|vn)\/customeradmin\/User\/login'] = 'customeradmin/User/login';





$route['(TH|th)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(US|us)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(KH|kh)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(LA|la)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(MM|mm)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(VN|vn)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';





$route['(TH|th)\/News'] = 'News/index';
$route['(US|us)\/News'] = 'News/index';
$route['(KH|kh)\/News'] = 'News/index';
$route['(LA|la)\/News'] = 'News/index';
$route['(MM|mm)\/News'] = 'News/index';
$route['(VN|vn)\/News'] = 'News/index';


$route['(TH|th)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';
$route['(US|us)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';
$route['(KH|kh)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';
$route['(LA|la)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';
$route['(MM|mm)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';
$route['(VN|vn)\/Blog\/mail\/(.+)'] = 'Blog/mail/$1/$2';




$route['(TH|th)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(US|us)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(KH|kh)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(LA|la)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(MM|mm)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(VN|vn)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';





$route['(TH|th)\/Blog'] = 'Blog/index';
$route['(US|us)\/Blog'] = 'Blog/index';
$route['(KH|kh)\/Blog'] = 'Blog/index';
$route['(LA|la)\/Blog'] = 'Blog/index';
$route['(MM|mm)\/Blog'] = 'Blog/index';
$route['(VN|vn)\/Blog'] = 'Blog/index';



$route['(TH|th)\/Blog\/index'] = 'Blog/index';
$route['(US|us)\/Blog\/index'] = 'Blog/index';
$route['(KH|kh)\/Blog\/index'] = 'Blog/index';
$route['(LA|la)\/Blog\/index'] = 'Blog/index';
$route['(MM|mm)\/Blog\/index'] = 'Blog/index';
$route['(VN|vn)\/Blog\/index'] = 'Blog/index';


$route['(TH|th)\/User'] = 'User/index/$1';
$route['(US|us)\/User'] = 'User/index/$1';
$route['(KH|kh)\/User'] = 'User/index/$1';
$route['(LA|la)\/User'] = 'User/index/$1';
$route['(MM|mm)\/User'] = 'User/index/$1';
$route['(VN|vn)\/User'] = 'User/index/$1';


$route['(TH|th)\/User\/login'] = 'User/login/$1';
$route['(US|us)\/User\/login'] = 'User/login/$1';
$route['(KH|kh)\/User\/login'] = 'User/login/$1';
$route['(LA|la)\/User\/login'] = 'User/login/$1';
$route['(MM|mm)\/User\/login'] = 'User/login/$1';
$route['(VN|vn)\/User\/login'] = 'User/login/$1';

$route['(TH|th)\/User\/profile'] = 'User/profile/$1';
$route['(US|us)\/User\/profile'] = 'User/profile/$1';
$route['(KH|kh)\/User\/profile'] = 'User/profile/$1';
$route['(LA|la)\/User\/profile'] = 'User/profile/$1';
$route['(MM|mm)\/User\/profile'] = 'User/profile/$1';
$route['(VN|vn)\/User\/profile'] = 'User/profile/$1';


$route['(TH|th)\/User\/address'] = 'User/address/$1';
$route['(US|us)\/User\/address'] = 'User/address/$1';
$route['(KH|kh)\/User\/address'] = 'User/address/$1';
$route['(LA|la)\/User\/address'] = 'User/address/$1';
$route['(MM|mm)\/User\/address'] = 'User/address/$1';
$route['(VN|vn)\/User\/address'] = 'User/address/$1';


$route['(TH|th)\/User\/request'] = 'User/request/$1';
$route['(US|us)\/User\/request'] = 'User/request/$1';
$route['(KH|kh)\/User\/request'] = 'User/request/$1';
$route['(LA|la)\/User\/request'] = 'User/request/$1';
$route['(MM|mm)\/User\/request'] = 'User/request/$1';
$route['(VN|vn)\/User\/request'] = 'User/request/$1';


$route['(TH|th)\/User\/slip'] = 'User/slip/$1';
$route['(US|us)\/User\/slip'] = 'User/slip/$1';
$route['(KH|kh)\/User\/slip'] = 'User/slip/$1';
$route['(LA|la)\/User\/slip'] = 'User/slip/$1';
$route['(MM|mm)\/User\/slip'] = 'User/slip/$1';
$route['(VN|vn)\/User\/slip'] = 'User/slip/$1';

$route['(TH|th)\/User\/changepassword'] = 'User/changepassword/$1';
$route['(US|us)\/User\/changepassword'] = 'User/changepassword/$1';
$route['(KH|kh)\/User\/changepassword'] = 'User/changepassword/$1';
$route['(LA|la)\/User\/changepassword'] = 'User/changepassword/$1';
$route['(MM|mm)\/User\/changepassword'] = 'User/changepassword/$1';
$route['(VN|vn)\/User\/changepassword'] = 'User/changepassword/$1';

$route['(TH|th)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';
$route['(US|us)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';
$route['(KH|kh)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';
$route['(LA|la)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';
$route['(MM|mm)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';
$route['(VN|vn)\/User\/request_detail\/(\d+)'] = 'User/request_detail/$1/$2';

// $route['(TH|th)\/User\/login\/(.+)'] = 'User/login/$1/$2';
// $route['(US|us)\/User\/login\/(.+)'] = 'User/login/$1/$2';
// $route['(KH|kh)\/User\/login\/(.+)'] = 'User/login/$1/$2';
// $route['(LA|la)\/User\/login\/(.+)'] = 'User/login/$1/$2';
// $route['(MM|mm)\/User\/login\/(.+)'] = 'User/login/$1/$2';
// $route['(VN|vn)\/User\/login\/(.+)'] = 'User/login/$1/$2';





$route['(TH|th)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(US|us)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(KH|kh)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(LA|la)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(MM|mm)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(VN|vn)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';





$route['(TH|th)\/Products'] = 'Products/index';
$route['(US|us)\/Products'] = 'Products/index';
$route['(KH|kh)\/Products'] = 'Products/index';
$route['(LA|la)\/Products'] = 'Products/index';
$route['(MM|mm)\/Products'] = 'Products/index';
$route['(VN|vn)\/Products'] = 'Products/index';

$route['(TH|th)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';
$route['(US|us)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';
$route['(KH|kh)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';
$route['(LA|la)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';
$route['(MM|mm)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';
$route['(VN|vn)\/Products\/sendenquiry_complete'] = 'Products/sendenquiry_complete';





$route['(TH|th)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(US|us)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(KH|kh)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(LA|la)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(MM|mm)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(VN|vn)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';

$route['(TH|th)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';
$route['(US|us)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';
$route['(KH|kh)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';
$route['(LA|la)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';
$route['(MM|mm)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';
$route['(VN|vn)\/Products\/index\/(\d+)\/(\d+)'] = 'Products/index/$1/$2/$3';




$route['(TH|th)\/Promotion'] = 'Promotion/index/$1';
$route['(US|us)\/Promotion'] = 'Promotion/index/$1';
$route['(KH|kh)\/Promotion'] = 'Promotion/index/$1';
$route['(LA|la)\/Promotion'] = 'Promotion/index/$1';
$route['(MM|mm)\/Promotion'] = 'Promotion/index/$1';
$route['(VN|vn)\/Promotion'] = 'Promotion/index/$1';

$route['(TH|th)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';
$route['(US|us)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';
$route['(KH|kh)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';
$route['(LA|la)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';
$route['(MM|mm)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';
$route['(VN|vn)\/Promotion\/detail\/(\d+)'] = 'Promotion/detail/$1/$2';



$route['(TH|th)\/Catalogue'] = 'Catalogue/index/$1';
$route['(US|us)\/Catalogue'] = 'Catalogue/index/$1';
$route['(KH|kh)\/Catalogue'] = 'Catalogue/index/$1';
$route['(LA|la)\/Catalogue'] = 'Catalogue/index/$1';
$route['(MM|mm)\/Catalogue'] = 'Catalogue/index/$1';
$route['(VN|vn)\/Catalogue'] = 'Catalogue/index/$1';

$route['(TH|th)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';
$route['(US|us)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';
$route['(KH|kh)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';
$route['(LA|la)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';
$route['(MM|mm)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';
$route['(VN|vn)\/Catalogue\/detail\/(\d+)'] = 'Catalogue/detail/$1/$2';

// Achievements

$route['(TH|th)\/Achievements'] = 'Achievements/index/$1';
$route['(US|us)\/Achievements'] = 'Achievements/index/$1';
$route['(KH|kh)\/Achievements'] = 'Achievements/index/$1';
$route['(LA|la)\/Achievements'] = 'Achievements/index/$1';
$route['(MM|mm)\/Achievements'] = 'Achievements/index/$1';
$route['(VN|vn)\/Achievements'] = 'Achievements/index/$1';

$route['(TH|th)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';
$route['(US|us)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';
$route['(KH|kh)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';
$route['(LA|la)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';
$route['(MM|mm)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';
$route['(VN|vn)\/Achievements\/detail\/(\d+)'] = 'Achievements/detail/$1/$2';






$route['(TH|th)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(US|us)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(KH|kh)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(LA|la)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(MM|mm)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(VN|vn)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';


$route['(TH|th)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';
$route['(US|us)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';
$route['(KH|kh)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';
$route['(LA|la)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';
$route['(MM|mm)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';
$route['(VN|vn)\/Favorite\/index\/(\d+)'] = 'Favorite/index/$1/$2';


$route['(TH|th)\/Favorite\/add'] = 'Favorite/add';
$route['(US|us)\/Favorite\/add'] = 'Favorite/add';
$route['(KH|kh)\/Favorite\/add'] = 'Favorite/add';
$route['(LA|la)\/Favorite\/add'] = 'Favorite/add';
$route['(MM|mm)\/Favorite\/add'] = 'Favorite/add';
$route['(VN|vn)\/Favorite\/add'] = 'Favorite/add';





$route['(TH|th)\/Favorite\/update'] = 'Favorite/update';
$route['(US|us)\/Favorite\/update'] = 'Favorite/update';
$route['(KH|kh)\/Favorite\/update'] = 'Favorite/update';
$route['(LA|la)\/Favorite\/update'] = 'Favorite/update';
$route['(MM|mm)\/Favorite\/update'] = 'Favorite/update';
$route['(VN|vn)\/Favorite\/update'] = 'Favorite/update';





$route['(TH|th)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(US|us)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(KH|kh)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(LA|la)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(MM|mm)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(VN|vn)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';





$route['(TH|th)\/Favorite'] = 'Favorite';
$route['(US|us)\/Favorite'] = 'Favorite';
$route['(KH|kh)\/Favorite'] = 'Favorite';
$route['(LA|la)\/Favorite'] = 'Favorite';
$route['(MM|mm)\/Favorite'] = 'Favorite';
$route['(VN|vn)\/Favorite'] = 'Favorite';

$route['(TH|th)\/Products\/compare'] = 'Products/compare/$1';
$route['(US|us)\/Products\/compare'] = 'Products/compare/$1';
$route['(KH|kh)\/Products\/compare'] = 'Products/compare/$1';
$route['(LA|la)\/Products\/compare'] = 'Products/compare/$1';
$route['(MM|mm)\/Products\/compare'] = 'Products/compare/$1';
$route['(VN|vn)\/Products\/compare'] = 'Products/compare/$1';





$route['(TH|th)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(US|us)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(KH|kh)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(LA|la)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(MM|mm)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(VN|vn)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';

$route['(TH|th)\/Products\/cart'] = 'Products/cart/$1';
$route['(US|us)\/Products\/cart'] = 'Products/cart/$1';
$route['(KH|kh)\/Products\/cart'] = 'Products/cart/$1';
$route['(LA|la)\/Products\/cart'] = 'Products/cart/$1';
$route['(MM|mm)\/Products\/cart'] = 'Products/cart/$1';
$route['(VN|vn)\/Products\/cart'] = 'Products/cart/$1';





$route['(TH|th)\/Products\/index'] = 'Products/index';
$route['(US|us)\/Products\/index'] = 'Products/index';
$route['(KH|kh)\/Products\/index'] = 'Products/index';
$route['(LA|la)\/Products\/index'] = 'Products/index';
$route['(MM|mm)\/Products\/index'] = 'Products/index';
$route['(VN|vn)\/Products\/index'] = 'Products/index';





// $route['(TH|th)\/Aboutus'] = 'Content/index/4';
// $route['(US|us)\/Aboutus'] = 'Content/index/4';
// $route['(KH|kh)\/Aboutus'] = 'Content/index/4';
// $route['(LA|la)\/Aboutus'] = 'Content/index/4';
// $route['(MM|mm)\/Aboutus'] = 'Content/index/4';
// $route['(VN|vn)\/Aboutus'] = 'Content/index/4';





$route['(TH|th)\/Contactus'] = 'Content/index/3';
$route['(US|us)\/Contactus'] = 'Content/index/3';
$route['(KH|kh)\/Contactus'] = 'Content/index/3';
$route['(LA|la)\/Contactus'] = 'Content/index/3';
$route['(MM|mm)\/Contactus'] = 'Content/index/3';
$route['(VN|vn)\/Contactus'] = 'Content/index/3';

$route['(TH|th)\/Contactus'] = 'Contactus/index/$1';
$route['(US|us)\/Contactus'] = 'Contactus/index/$1';
$route['(KH|kh)\/Contactus'] = 'Contactus/index/$1';
$route['(LA|la)\/Contactus'] = 'Contactus/index/$1';
$route['(MM|mm)\/Contactus'] = 'Contactus/index/$1';
$route['(VN|vn)\/Contactus'] = 'Contactus/index/$1';


$route['(TH|th)\/Job'] = 'Job/index/$1';
$route['(US|us)\/Job'] = 'Job/index/$1';
$route['(KH|kh)\/Job'] = 'Job/index/$1';
$route['(LA|la)\/Job'] = 'Job/index/$1';
$route['(MM|mm)\/Job'] = 'Job/index/$1';
$route['(VN|vn)\/Job'] = 'Job/index/$1';

$route['(TH|th)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';
$route['(US|us)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';
$route['(KH|kh)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';
$route['(LA|la)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';
$route['(MM|mm)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';
$route['(VN|vn)\/Job\/detail\/(\d+)'] = 'Job/detail/$1/$2';





$route['Contactus'] = 'Content/index/7';





$route['(TH|th)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(US|us)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(KH|kh)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(LA|la)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(MM|mm)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(VN|vn)\/(.*)_(.*)'] = 'Products/index/$1/$2';





$route['default_controller'] = 'Home/index';
$route['404_override'] = 'Home';

//$route['translate_uri_dashes'] = FALSE;