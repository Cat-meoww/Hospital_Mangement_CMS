<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->addPlaceholder('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/faqs', 'Home::faq');
$routes->get('/contactus', 'Home::contactus');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/logout', 'Home::logout');


$routes->get('/properties', 'Home::properties');
$routes->get('/properties/map', 'Home::properties_map');
$routes->get('/listing/agents', 'Home::agent_listing');
$routes->get('/property-detail/(:uuid)', 'Home::property_detail/$1');
$routes->get('/profile/(:num)', 'Home::agent_profile/$1');



$routes->group('auth', function ($routes) {
    $routes->add('login', 'Login::index', ['filter' => 'redirect_dashboard',]);
    $routes->add('logout', 'Login::logout');
    $routes->add('register', 'Login::index');
    $routes->post('login/check', 'Login::auth_check');
    $routes->post('login/register', 'Login::register');
    // Redirect to a named route
    $routes->addRedirect('/', 'login');
});

$routes->get('redirect-to-dashboard', 'Login::user_dashboard');

$routes->group('admin', ['namespace' => 'App\Controllers\admin'], static function ($routes) {
    $routes->add('dashboard', 'admin::index');
    $routes->group('all-master', static function ($routes) {
        $routes->add('amenities', 'master::amenities');
        $routes->add('property-types', 'master::property_types');
        $routes->add('add_property', 'admin::add_property');
    });
    $routes->group('management', static function ($routes) {
        $routes->add('agent_management', 'admin::agent_management');
        $routes->add('client_management', 'admin::client_management');
    });
    $routes->group('cms', static function ($routes) {
        $routes->add('faq', 'cms\faq::index');
        $routes->add('ads', 'cms\ads::index');
        $routes->add('best-deals', 'cms\best_deals::index');
    });
    $routes->group('enquiries', static function ($routes) {
        $routes->add('faq', 'enquiries::faq');
        $routes->add('contact-us', 'enquiries::contact_us');
    });
});


$routes->group('forms', static function ($routes) {
    $routes->group('public', static function ($routes) {
        $routes->post('contact-us', 'Home::post_contactus');
        $routes->post('faq', 'Home::post_faq');
        $routes->post('property/add-enquiry', 'Home::post_property_enquiry');
    });
});



$routes->group('api', static function ($routes) {
    $routes->group('admin', ['namespace' => 'App\Controllers\API\admin'], static function ($routes) {
        $routes->group('all-master', static function ($routes) {
            $routes->group('amenities', static function ($routes) {
                $routes->post('create', 'master::create_amenities');
                $routes->post('update', 'master::update_amenities');
                $routes->post('delete', 'master::delete_amenities');
            });
            
            $routes->group('cms', static function ($routes) {
                $routes->group('faq', static function ($routes) {
                    $routes->post('create', 'master::create_cms_faq');
                    $routes->post('update', 'master::update_cms_faq');
                    $routes->post('delete', 'master::delete_cms_faq');
                });
                $routes->group('ads', ['namespace' => 'App\Controllers\admin\cms'], static function ($routes) {
                    $routes->post('create', 'ads::create_ads');
                    $routes->post('update', 'ads::update_ads');
                    $routes->post('delete', 'ads::delete_ads');
                });
                $routes->group('deals', ['namespace' => 'App\Controllers\admin\cms'], static function ($routes) {
                    $routes->post('create', 'best_deals::create_deal');
                    $routes->post('update', 'best_deals::update_deal');
                    $routes->post('delete', 'best_deals::delete_deal');
                });
            });
        });
    });
    
    $routes->group('geo', ['namespace' => 'App\Controllers\API\Services'], static function ($routes) {
        $routes->group('countries', static function ($routes) {
            $routes->get('/', 'Geoservice::Getcountries');
            $routes->post('states', 'Geoservice::Getstates');
            $routes->post('state/cities', 'Geoservice::Getcities');
        });
    });
});
