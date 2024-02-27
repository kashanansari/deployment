<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\BackupController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('id', [userController::class, 'getid']);
Route::post('/checkin', [userController::class, 'check_in']);


Route::post('/attend', [userController::class, 'manageAttendance']);
// Route::get('/getallattend', [userController::class, 'get_all_record']);
Route::get('/alldatalogs', [userController::class, 'all_data_logs']);
Route::get('/getReg/{customer_name}', [userController::class, 'get_Reg_No']);
Route::get('/date', [userController::class, 'getcurrenttime']);
Route::get('/all_device_inventory', [userController::class, 'all_inventory']);
Route::get('/active_devices', [userController::class, 'active_devices']);
Route::get('/inactive_devices', [userController::class, 'inactive_devices']);
Route::get('/inactive_devices', [userController::class, 'inactive_devices']);
Route::get('/chunk', [userController::class, 'chunk']);
Route::get('/alll', [userController::class, 'sms']);
// Route::get('/all', [userController::class, 'view_all_data_logs']);
Route::get('/jj', [userController::class, 'joins']);
// Route::get('/dollar_rate', [userController::class, 'dollar_rate']);


Route::post('/forget', [userController::class, 'create_forgetpass']);


Route::get('/getforget', [userController::class, 'get_forgetpassword']);
Route::post('/action', [userController::class, 'action_forget_password']);
Route::post('/update_device', [userController::class, 'update_device']);
Route::post('/storedata', [userController::class,  'storedata'])->name('storedata');
Route::get('/details', [userController::class,  'all_vehicle_details'])->name('details');
Route::get('/completedetails', [userController::class, 'complete_vehicle_details']);
Route::get('emp_attends', [userController::class, 'Emp_attendance'])->name('emp_attends');
Route::get('add_employees', [userController::class, 'add_employees'])->name('add_employees');
Route::get('allemp', [userController::class, 'all_emp'])->name('allemp');
Route::get('roles', [userController::class, 'get_roles'])->name('roles');
//Integeration for tomorrow
Route::post('/create_emp', [userController::class, 'create_emp'])->name('create_emp');
Route::post('/view_update', [userController::class, 'view_update'])->name('view_update');
// Route::post('/edit_emp', [userController::class, 'create_update_emp'])->name('edit_emp');
Route::get('/allcomplain', [userController::class, 'allcomplain'])->name('allcomplain');
// Route::post('/viewprofile', [userController::class, 'view_profle'])->name('viewprofile');
Route::post('/editprofile', [userController::class, 'editprofile'])->name('editprofile');
Route::post('/empLogin', [userController::class, 'emp_login'])->name('empLogin');
Route::post('/storedata', [userController::class,  'storedata'])->name('storedata');
Route::get('/user', [userController::class, 'user'])->name('user');
Route::post('/removal_search', [userController::class, 'removal_search'])->name('removal_search');
Route::post('/createremoval', [userController::class, 'create_removal'])->name('createremoval');
Route::get('edit/{reg_no}', [userController::class, 'edit'])->name('edit/{reg_no}');
Route::post('test_api', [userController::class, 'test_api'])->name('test_api');
Route::post('service_order_form', [userController::class, 'service_order_form'])->name('service_order_form');
Route::get('technical_alert', [userController::class, 'technical_alert'])->name('technical_alert');
Route::post('/technical_create', [userController::class,  'technical_create'])->name('technical_create');
Route::get('securityalert', [userController::class, 'securityalert'])->name('securityalert');
Route::post('/security_create', [userController::class,  'security_create'])->name('security_create');

Route::post('/device_certificate', [userController::class,  'device_certificate'])->name('device_certificate');
Route::post('/view_certificate', [userController::class, 'view_certificate'])->name('view_certificate');
//backup sql database
Route::post('/createAndDownloadBackup', [BackupController::class, 'createAndDownloadBackup']);


Route::post('/search_for_all', [userController::class, 'search_for_all'])->name('search_for_all');
Route::post('/complain_box', [userController::class, 'complain_box'])->name('complain_box');
// Route::get('/alldatalogs', [userController::class, 'view_all_data_logs'])->name('alldatalogs');
Route::post('/NR', [userController::class, 'NR'])->name('NR');
Route::post('/redo_search', [userController::class, 'redo_search'])->name('redo_search');
Route::post('/create_redo', [userController::class,  'create_redo']);
Route::post('/createcomplain', [userController::class, 'create_complain'])->name('createcomplain');
Route::post('/create_datalogs', [userController::class, 'create_datalogs'])->name('create_datalogs');
Route::get('/all_removal_info', [userController::class, 'all_removal_info'])->name('all_removal_info');
Route::get('/alert_technical', [userController::class, 'alert_technical'])->name('alert_technical');
Route::get('/tech_reg/{reg_no}', [userController::class, 'tech_reg'])->name('tech_reg/{reg_no}');

Route::get('/alert_security', [userController::class, 'alert_security'])->name('alert_security');
Route::post('/storeinventory', [userController::class, 'create_deviceinventory'])->name('storeinventory');
Route::get('/all_redo_info', [userController::class, 'all_redo_info'])->name('all_redo_info');
Route::get('/all_device_info', [userController::class, 'all_device_info'])->name('all_device_info');
Route::get('/all_inventory_info', [userController::class, 'all_inventory_info'])->name('all_inventory_info');
Route::get('/all_mis_info', [userController::class, 'all_mis_info'])->name('all_mis_info');

Route::get('/getrenewals', [userController::class, 'get_renewals'])->name('getrenewals');
Route::get('/renewals_info/{regNo}', [userController::class, 'get_renewals_info'])->name('renewals_info');
Route::post('/add_renewal_remarks', [userController::class, 'add_renewal_remarks'])->name('add_renewal_remarks');
Route::get('/get_renewal_remarks/{renewal_id}', [userController::class, 'get_renewal_remarks'])->name('get_renewal_remarks/{renewal_id}');
Route::get('/complain_queue', [userController::class, 'complain_queue'])->name('complain_queue');
Route::get('/complain_resolve/{id}', [userController::class, 'complain_resolve'])->name('complain_resolve/{id}');
Route::post('/create_resolve_complain', [userController::class, 'create_resolve_complain'])->name('create_resolve_complain');
Route::post('/add_renewal_payment', [userController::class, 'add_renewal_payment'])->name('add_renewal_payment');

Route::post('/create_update_emp', [userController::class, 'create_update_emp'])->name('create_update_emp');
Route::post('/editprofile', [userController::class, 'editprofile'])->name('editprofile');
Route::get('get_attends', [userController::class, 'attendance'])->name('get_attends');
Route::post('/checkin_out', [userController::class, 'CheckInout'])->name('checkin_out');
Route::get('/getallattend', [userController::class, 'get_all_record'])->name('getallattend');
Route::get('/NR_queue', [userController::class, 'NR_queue'])->name('NR_queue');
Route::post('/logout', [userController::class, 'logout'])->name('logout');
Route::get('/active_inactive', [userController::class, 'active_inactive'])->name('active_inactive');
// Route::post('/view_update', [userController::class, 'view_update'])->name('view_update');
Route::post('/edit_emp', [userController::class, 'edit_emp'])->name('edit_emp');
Route::get('/reg_datalogs/{search_term}', [userController::class, 'datalogs'])->name('reg_datalogs/{search_term}');
Route::post('/update_status_renewal', [userController::class, 'update_status_renewal'])->name('update_status_renewal');
// Route::get('/gg', [userController::class, 'gg'])->name('gg');
// // Route::get('/cc', [userController::class, 'cc'])->name('cc');
Route::post('/model_keys', [userController::class, 'model_keys'])->name('model_keys');
Route::post('/getdevices', [userController::class, 'getDeviceSerialNumbers'])->name('getdevices');
Route::post('/view_update', [userController::class, 'view_update'])->name('view_update');
Route::post('/viewprofile', [userController::class, 'view_profle'])->name('viewprofile');
Route::post('/removalate', [userController::class, 'removalate'])->name('removalate');
Route::post('/create_removal_transfer', [userController::class, 'create_removal_transfer'])->name('create_removal_transfer');
Route::post('/seach_ownership', [userController::class, 'seach_ownership'])->name('seach_ownership');
Route::get('/testedit/{reg_no}', [userController::class, 'testedit'])->name('testedit/{reg_no}');
Route::post('/createrownership', [userController::class, 'ownership_create'])->name('createrownership');
Route::post('/create_sim_inventtory', [userController::class, 'create_sim_inventtory'])->name('create_sim_inventtory');
Route::post('/get_device_no', [userController::class, 'get_device_no'])->name('get_device_no');
Route::post('/get_sim_no', [userController::class, 'get_sim_no'])->name('get_sim_no');
Route::post('/create_merge_inventory', [userController::class, 'create_merge_inventory'])->name('create_merge_inventory');
Route::post('/search_merge_inventory', [userController::class, 'search_merge_inventory'])->name('search_merge_inventory');
Route::post('/update_merge_inventory', [userController::class, 'update_merge_inventory'])->name('update_merge_inventory');
Route::post('/seach_secondary_device', [userController::class, 'seach_secondary_device'])->name('seach_secondary_device');
Route::post('/create_another_device', [userController::class, 'create_another_device'])->name('create_another_device');
