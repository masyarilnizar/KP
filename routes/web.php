<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */


Route::get('/', 'App\Http\Controllers\WellyadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\WellyadminController@dashboard_1');
Route::get('/patient', 'App\Http\Controllers\WellyadminController@patient');
Route::get('/patient-details', 'App\Http\Controllers\WellyadminController@patient_details');
Route::get('/doctor', 'App\Http\Controllers\WellyadminController@doctor');
Route::get('/doctor-details', 'App\Http\Controllers\WellyadminController@doctor_details');
Route::get('/reviews', 'App\Http\Controllers\WellyadminController@reviews');
Route::get('/app-calender', 'App\Http\Controllers\WellyadminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\WellyadminController@app_profile');
Route::get('/post-details', 'App\Http\Controllers\WellyadminController@post_details');
Route::get('/chart-chartist', 'App\Http\Controllers\WellyadminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\WellyadminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\WellyadminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\WellyadminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\WellyadminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\WellyadminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\WellyadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\WellyadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\WellyadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\WellyadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\WellyadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\WellyadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\WellyadminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\WellyadminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\WellyadminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\WellyadminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\WellyadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\WellyadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\WellyadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\WellyadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\WellyadminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\WellyadminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\WellyadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\WellyadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\WellyadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\WellyadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\WellyadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\WellyadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\WellyadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\WellyadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\WellyadminController@page_register');

Route::get('/table-bootstrap-basic', 'App\Http\Controllers\WellyadminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\WellyadminController@table_datatable_basic');

Route::get('/dashboard2', 'App\Http\Controllers\WellyadminController@dashboard_2');

Route::get('/obat', 'App\Http\Controllers\WellyadminController@obat');
Route::get('/golongan', 'App\Http\Controllers\WellyadminController@golongan');
Route::get('/kandungan', 'App\Http\Controllers\WellyadminController@kandungan');
Route::get('/dosis', 'App\Http\Controllers\WellyadminController@dosis');
Route::get('/satuan', 'App\Http\Controllers\WellyadminController@satuan');
Route::get('/pabrik', 'App\Http\Controllers\WellyadminController@pabrik');
Route::get('/pbf', 'App\Http\Controllers\WellyadminController@pbf');



Route::get('/uc-lightgallery', 'App\Http\Controllers\WellyadminController@uc_lightgallery');
Route::get('/uc-nestable', 'App\Http\Controllers\WellyadminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\WellyadminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\WellyadminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\WellyadminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\WellyadminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\WellyadminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\WellyadminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\WellyadminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\WellyadminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\WellyadminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\WellyadminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\WellyadminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\WellyadminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\WellyadminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\WellyadminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\WellyadminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\WellyadminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\WellyadminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\WellyadminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\WellyadminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\WellyadminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\WellyadminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\WellyadminController@widget_basic');
