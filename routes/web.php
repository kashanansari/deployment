<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\BackupController;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[userController::class,'view'])->name('/login');
Route::get('/home', function () {

    return view('home');
})->name('home');
Route::get('/home1', function () {
    return view('home1');
})->name('home1');
Route::get('/home2', function () {
    return view('home2');
})->name('home2');
Route::get('/home3', function () {
    return view('home3');
})->name('home3');
// Route::get('/user', function () {
//     return view('userdetails');
// })->name('user');
// Route::get('/user', [userController::class, 'user'])->name('user');
Route::get('personal/{id}', [userController::class, 'single'])->name('personal');
Route::get('further/{id}', [userController::class, 'furtherdetails'])->name('further');

Route::get('technical', [userController::class, 'technicalregisteration'])->name('technical');
Route::get('securityform/{id}', [userController::class, 'securityform'])->name('securityform');
// Route::get('securityalert', [userController::class, 'securityalert'])->name('securityalert');

// Route::get('user2/{id}', [userController::class, 'technical'])->name('user2');

 Route::get('show', [userController::class, 'show'])->name('show');
//  Route::get('alert', [userController::class, 'alert'])->name('alert');

Route::get('delete/{id}', [userController::class, 'delete'])->name('delete');
// Route::get('edit/{id}', [userController::class, 'edit'])->name('edit');

// Route::get('/alluser', function () {
//     return view('alluser');
// })->name('alluser');
// Route::get('check-new-data', [userController::class, 'checkNewData']);
Route::get('/complainform', [userController::class, 'complainform'])->name('complainform');
Route::get('/removalform', [userController::class, 'removalForm'])->name('removalform');

// Route::get('/logout', [userController::class, 'logout'])->name('logout');
// Route::post('/storedata', [userController::class,  'storedata'])->name('storedata');
// Route::post('/storetechnical', [userController::class,  'technical_details'])->name('storetechnical');
// Route::post('/storesecurity', [userController::class,  'securitydetails']);
// Route::post('/storeinventory', [userController::class, 'create_deviceinventory'])->name('storeinventory');
Route::any('/complain_actions', [userController::class,  'action_complain'])->name('complain.actions');
// Route::post('/redoactions', [userController::class,  'create_redo']);
Route::post('/devicecreate', [userController::class,  'create_inventory']);

Route::put('/updateall/{id}', [userController::class, 'update_details'])->name('updateall');
// Route::post('/createcomplain', [userController::class, 'create_complain'])->name('createcomplain');
// Route::post('/createremoval', [userController::class, 'create_removal'])->name('createremoval');
// Route::post('/creatertransfer', [userController::class, 'create_transfer'])->name('creatertransfer');
// Route::post('/createrownership', [userController::class, 'ownership_create'])->name('createrownership');
Route::post('/create_soldout', [userController::class, 'create_soldout'])->name('create_soldout');
// Route::post('/create_datalogs', [userController::class, 'create_datalogs'])->name('create_datalogs');
// Route::post('/create_emp', [userController::class, 'create_emp'])->name('create_emp');
// Route::post('/edit_emp', [userController::class, 'create_update_emp'])->name('edit_emp');
Route::post('/change_pic', [userController::class, 'change_pic'])->name('change_pic');
// Route::post('/empLogin', [userController::class, 'emp_login'])->name('empLogin');
// Route::post('/renewals_remarks', [userController::class, 'create_renewal_remarks'])->name('renewals_remarks');
// Route::post('/add_payment', [userController::class, 'store_add_renewalpayment'])->name('add_payment');
// Route::post('/update_status_renewal', [userController::class, 'update_status_renewal'])->name('update_status_renewal');
// Route::post('/editprofile', [userController::class, 'editprofile'])->name('editprofile');
Route::post('/renewal_status', [userController::class, 'action_removal_renewals'])->name('renewal_status');
Route::post('/sms_service', [userController::class, 'create_sms_service'])->name('sms_service');
Route::post('/pdf', [userController::class, 'export_to_pdf'])->name('pdf');
Route::post('/download_pdf', [userController::class, 'download_pdf'])->name('download_pdf');
Route::post('/forget', [userController::class, 'create_forgetpass'])->name('forget');
Route::post('/action_forget', [userController::class, 'action_forget_password'])->name('action_forget');
Route::post('/update_device', [userController::class, 'update_device'])->name('update_device');



// Route::get('/user', [userController::class, 'user'])->name('user');
// Route::get('/allcomplain', [userController::class, 'allcomplain'])->name('allcomplain');
Route::get('/singlecomplain/{complain_id}', [userController::class, 'single_complain'])->name('singlecomplain');
Route::get('/reguserdata', [userController::class, 'reguserdata'])->name('reguserdata');
Route::get('/removal', [userController::class, 'removalForm'])->name('removal');
// Route::get('/data', [userController::class, 'removal_create'])->name('data');
// Route::get('/dataa', [userController::class, 'removalate'])->name('dataa');

Route::get('/complainLogs/{regNo}', [userController::class, 'complainLogs'])->name('complainlogs');
Route::get('/datalogs/{search_term}', [userController::class, 'datalogs'])->name('datalogs');


Route::get('/cc', [userController::class, 'complian_notification'])->name('cc');
Route::get('/reqform', [userController::class, 'requestform'])->name('reqform');
Route::get('/installation', [userController::class, 'installation'])->name('installation');
Route::get('/redo_create', [userController::class, 'redo_create'])->name('redo_create');

Route::get('redo/{id}', [userController::class, 'redo'])->name('redo');
// Route::get('/getdevices', [userController::class, 'getDeviceSerialNumbers'])->name('getdevices');
Route::get('/removal_transfer', [userController::class, 'removal_transfer'])->name('removal_transfer');

Route::get('/transfer', [userController::class, 'transfer'])->name('transfer');

// Route::get('/viewowner', [userController::class, 'viewownership'])->name('viewowner');
Route::get('/ownershipform', [userController::class, 'view_owner_form'])->name('ownershipform');
Route::get('/datlogs/{regNo}', [userController::class, 'datlogs'])->name('datlogs');


Route::get('view_employees', [userController::class, 'view_employees'])->name('view_employees');
// Route::get('add_employees', [userController::class, 'add_employees'])->name('add_employees');
// Route::get('allemp', [userController::class, 'all_emp'])->name('allemp');
Route::delete('delete_emp/{emp_id}', [userController::class, 'delete_emp'])->name('delete_emp');

Route::get('view_emp_update', [userController::class, 'view_update_emp'])->name('update_emp');

Route::get('viewlogin', [userController::class, 'viewemp_update'])->name('viewlogin');
// Route::get('view_update', [userController::class, 'view_update'])->name('view_update');

Route::get('single_emp/{emp_id}', [userController::class, 'single_emp'])->name('single_emp');
Route::get('completedetails', [userController::class, 'complete_vehicle_details'])->name('completedetails');

// Route::get('emp_attends', [userController::class, 'Emp_attendance'])->name('emp_attends');
// Route::get('get_attends', [userController::class, 'attendance'])->name('get_attends');


Route::get('sales_lead', [userController::class, 'sales_lead'])->name('sales_lead');

Route::get('/attendance_report', [userController::class, 'fetchAttendanceReport'])->name('attendance_report');
Route::get('/view_rewnewals', [userController::class, 'view_renewals'])->name('view_rewnewals');
// Route::get('/getrenewals', [userController::class, 'get_renewals'])->name('getrenewals');

// Route::get('/get_renewals_remarks', [userController::class, 'get_renewal_remarks'])->name('get_renewals_remarks');
// Route::get('/renewals_info/{regNo}', [userController::class, 'get_renewals_info'])->name('renewals_info');
Route::get('/add_renewal_payement/{regNo}', [userController::class, 'add_renewal_payement'])->name('add_renewal_payement');
Route::get('/update_renewal/{regNo}', [userController::class, 'update_renewal'])->name('update_renewal');
Route::get('/upd_renewal', [userController::class, 'view_update_renewal'])->name('upd_renewal');


Route::get('id/{login_id}', [userController::class, 'getid']);

Route::get('/log', [userController::class, 'gettimings'])->name('log');
Route::get('/vas/{id}', [userController::class, 'getvasoptions'])->name('vas');

Route::get('/tech/{id}', [userController::class, 'tech']);


Route::get('/time', [userController::class, 'view_renewals']);
// Route::get('/alldatalogs', [userController::class, 'view_all_datalogs']);
// Route::get('/alldatalogs', [userController::class, 'view_all_data_logs'])->name('alldatalogs');
Route::get('/view30datalogs', [userController::class, 'view30days'])->name('view30datalogs');

Route::get('/last30days', [userController::class, 'last_30_days_datalogs'])->name('last30days');
Route::get('/view_allcomaplainlogs', [userController::class, 'view_all_complain_logs'])->name('view_allcomaplainlogs');


Route::get('/view_data', [userController::class, 'view_data_logs'])->name('view_data');
Route::get('/allcomplainlogs', [userController::class, 'all_complain_logs'])->name('allcomplainlogs');
// Route::get('/view_all_device_inventory', [userController::class, 'all_inventory'])->name('view_all_device_inventory');
Route::get('/update_device_info', [userController::class, 'update_device_inventory'])->name('update_device_info');
Route::get('/view_update_inventory', [userController::class, 'view_update_inventory'])->name('view_update_inventory');

Route::get('/renwals_removal', [userController::class, 'get_renewal_removals'])->name('renwals_removal');
Route::get('/sms_box', [userController::class, 'sms_box'])->name('sms_box');
Route::get('/forget_pass', [userController::class, 'forgetpassword'])->name('forget_pass');
Route::get('/view_forget', [userController::class, 'get_forgetpassword'])->name('view_forget');
Route::get('/record', [userController::class, 'employees_record'])->name('record');

Route::get('/dollar_rate', [userController::class, 'dollar_rate'])->name('dollar_rate');



// TESTING PURPOSE
Route::get('/storeajax', [userController::class, 'testapi'])->name('storeajax');
Route::post('/ajax', [userController::class, 'storeajax'])->name('ajax');
// Route::get('/viewprofile', [userController::class, 'view_profle'])->name('viewprofile');
Route::get('/getvalue/{regNo}', [userController::class, 'formualte']);

Route::get('/searchcustomername/{customer}',[userController::class,'search_by_customer_name'])->name('searchcustomername');
Route::get('/logs', [userController::class, 'logs'])->name('logs');

Route::get('/active_devices',[userController::class,'active_devices'])->name('active_devices');
Route::get('/inactive_devices',[userController::class,'inactive_devices'])->name('inactive_devices');
Route::get('/tt/{id}',[userController::class,'get_name'])->name('tt');

Route::get('/download_renewals', [userController::class, 'download_renewals'])->name('download_renewals');

Route::get('/view_forget', [userController::class, 'get_forgetpassword'])->name('view_forget');

Route::get('/api/backup', [userController::class, 'createBackup'])->name('/api/backup');
Route::get('/backup', function () {
    return view('backup');
});
// Route::post('/view_certificate', [userController::class, 'view_certificate'])->name('view_certificate');
