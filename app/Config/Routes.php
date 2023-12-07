<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StaticPages::index');
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
$routes->setAutoRoute(false);

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

$routes->get('/privacy', 'Home::privacy');
$routes->get('/logout', 'Home::logout');


// Static pages
$routes->get('/home', 'StaticPages::home');
$routes->get('/aboutus', 'StaticPages::aboutus');
$routes->get('/chairman', 'StaticPages::chairman');

$routes->group('services', function ($routes) {
    $routes->get('esophago-gastric-surgery', 'StaticPages::esophago_gastric_surgery');
    $routes->get('colorectal-surgery', 'StaticPages::colorectal_surgery');
    $routes->get('liver-pancreas', 'StaticPages::liver_pancreas');
    $routes->get('medical-gastroenterology', 'StaticPages::medical_gastroenterology');
    $routes->get('endogynecology', 'StaticPages::endogynecology');
    $routes->get('obesity-diabetes', 'StaticPages::obesity_diabetes');
    $routes->get('hernia-care', 'StaticPages::hernia_care');
    $routes->get('digestive-cancer-care', 'StaticPages::digestive_cancer_care');
    $routes->get('multi-organ-transplant', 'StaticPages::multi_organ_transplant');
    $routes->get('cardiology', 'StaticPages::cardiology');
    $routes->get('nephrology', 'StaticPages::nephrology');
    $routes->get('urology', 'StaticPages::urology');
});

$routes->get('/mgr', 'StaticPages::mgr');
$routes->get('/nbe', 'StaticPages::nbe');
$routes->get('/health-package', 'StaticPages::health_package');
$routes->get('/contactus', 'StaticPages::contact_us');
$routes->get('/career', 'StaticPages::career');
$routes->get('/bmw', 'StaticPages::bmw');
$routes->get('/insurance', 'StaticPages::insurance');
$routes->get('/blog', 'StaticPages::blog');
$routes->get('/magazines', 'StaticPages::magazines');
$routes->get('/press-release', 'StaticPages::press_release');
$routes->get('/doctorinfo', 'StaticPages::doctor_info');
$routes->get('/privacy-policy', 'StaticPages::privacy');



//Doctors routes
$routes->get('/branch/(:num)', 'Home::index/$1');
$routes->get('/doctors-list/(:any)', 'Home::doctors_list/$1');
// $routes->get('/service/(:any)', 'Home::service_detail/$1');
// $routes->get('/services/(:any)', 'Home::location_services/$1');


$routes->group('appointment', function ($routes) {
    $routes->get('book-appointment', 'Home::general_booking');
    $routes->get('video-consultation', 'Home::video_booking');

    $routes->get('thanks', 'Home::thanks');
});


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
    $routes->group('all-master', ['namespace' => 'App\Controllers\admin\master'], static function ($routes) {
        $routes->add('locations', 'location::index');
        $routes->add('services', 'services::index');
        $routes->add('departments', 'departments::index');
        $routes->add('branches', 'branches::index');

        $routes->group('doctors', static function ($routes) {
            $routes->add('roles', 'doctors_role::index');
            $routes->add('list', 'doctors::index');
        });
    });
    $routes->group('management', static function ($routes) {
        $routes->add('agent_management', 'admin::agent_management');
        $routes->add('client_management', 'admin::client_management');
    });
    $routes->group('branch-management', ['namespace' => 'App\Controllers\admin\master'], static function ($routes) {
        $routes->add('departments', 'branch_management::departments');
        $routes->add('services', 'branch_management::services');
        $routes->add('doctors', 'branch_management::doctors');
    });
    $routes->group('booking-management', static function ($routes) {
        $routes->group('video', ['namespace' => 'App\Controllers\admin\master\bookings'], static function ($routes) {
            $routes->add('doctors', 'video_management::doctors');
            $routes->add('time-slots', 'time_slots::index');
        });
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
    $routes->group('bookings', static function ($routes) {
        $routes->add('general', 'bookings::general_bookings');
        $routes->add('video', 'bookings::video_bookings');
    });
});


$routes->group('forms', static function ($routes) {
    $routes->group('public', static function ($routes) {
        $routes->post('contact-us', 'Home::post_contactus');
        $routes->post('faq', 'Home::post_faq');
        $routes->post('book-appointment', 'Home::book_appointment');
        $routes->post('video-consultation', 'Home::handle_video_form');
    });
});



$routes->group('api', static function ($routes) {
    $routes->group('admin', ['namespace' => 'App\Controllers\API\admin'], static function ($routes) {
        $routes->group('all-master', ['namespace' => 'App\Controllers\admin\master'], static function ($routes) {
            $routes->group('locations', static function ($routes) {
                $routes->post('create', 'location::create');
                $routes->post('update', 'location::update');
                $routes->post('delete', 'location::delete');
            });
            $routes->group('services', static function ($routes) {
                $routes->post('create', 'services::create');
                $routes->post('update', 'services::update');
                $routes->post('delete', 'services::delete');
            });
            $routes->group('doctors-role', static function ($routes) {
                $routes->post('create', 'doctors_role::create');
                $routes->post('update', 'doctors_role::update');
                $routes->post('delete', 'doctors_role::delete');
            });
            $routes->group('doctors-list', static function ($routes) {
                $routes->post('create', 'doctors::create');
                $routes->post('update', 'doctors::update');
                $routes->post('delete', 'doctors::delete');
                $routes->post('generate-services', 'doctors::generate_services_options');
            });
            $routes->group('departments', static function ($routes) {
                $routes->post('create', 'departments::create');
                $routes->post('update', 'departments::update');
                $routes->post('delete', 'departments::delete');
            });
            $routes->group('branches', static function ($routes) {
                $routes->post('create', 'branches::create');
                $routes->post('update', 'branches::update');
                $routes->post('delete', 'branches::delete');
                $routes->group('management', static function ($routes) {
                    $routes->post('departments/update', 'branch_management::update_departments');
                    $routes->post('services/update', 'branch_management::update_services');
                    $routes->post('services/generate_options', 'branch_management::generate_service_options');
                    $routes->post('doctors/update', 'branch_management::update_doctors');
                    $routes->post('doctors/generate_options', 'branch_management::generate_doctor_options');
                });
            });
            $routes->group('time-slots', ['namespace' => 'App\Controllers\admin\master\bookings'], static function ($routes) {
                $routes->post('create', 'time_slots::create');
                $routes->post('update', 'time_slots::update');
                $routes->post('delete', 'time_slots::delete');
            });
            $routes->group('bookings', static function ($routes) {
                $routes->group('video', ['namespace' => 'App\Controllers\admin\master\bookings'], static function ($routes) {
                    $routes->add('add-doctor', 'video_management::add_doctor');
                    $routes->add('delete-doctor', 'video_management::delete_doctor');
                    $routes->add('update-doctor-slot', 'video_management::update_doctor_timeslot');
                });
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
        $routes->group('datatables', ['namespace' => 'App\Controllers\admin'], static function ($routes) {
            $routes->group('bookings', ['namespace' => 'App\Controllers\admin'], static function ($routes) {
                $routes->post('video', 'bookings::video_datatable');
            });
        });
    });

    $routes->group('frontend', ['namespace' => 'App\Controllers\API\frontend'], static function ($routes) {
        $routes->post('get-services', 'FrontService::get_services');
        $routes->post('get-video-doctors', 'FrontService::get_video_doctors');
        $routes->post('get-time-slots', 'FrontService::get_time_slots');
    });

    $routes->group('geo', ['namespace' => 'App\Controllers\API\Services'], static function ($routes) {
        $routes->group('countries', static function ($routes) {
            $routes->get('/', 'Geoservice::Getcountries');
            $routes->post('states', 'Geoservice::Getstates');
            $routes->post('state/cities', 'Geoservice::Getcities');
        });
    });
});
