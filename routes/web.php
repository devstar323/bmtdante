<?php
// use Illuminate\Support\Facades\Route;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('aspect/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('category/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('author/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('cart/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

// Hiring Route
Route::post('/doc_send', 'HiringController@send_hire')->name('hiring.send_hire');
Route::get('/participate_hiring', 'HiringController@index')->name('hiring.participate');
Route::get('/hire', 'HiringController@hire')->name('hiring.hire');
Route::get('/help', 'HiringController@help')->name('hiring.help');
Route::get('/driving_test', 'HiringController@driving_test')->name('hiring.driving-test');
Route::get('/docusign', 'HiringController@docusign')->name('hiring.docusign');
Route::get('/docusign_get', 'HiringGetController@index')->name('hiring.docusign_get');

Route::get('/driver_image_show/{file}', 'HiringController@show_driver_image')->name('hiring.driver_show');
Route::get('/driver_image_download/{file}', 'HiringController@download_driver_image')->name('hiring.driver_download');

Route::get('/doc_pdf_show/{pdf_file}', 'HiringController@show_pdf')->name('hiring.pdf_com_show');
Route::get('/doc_pdf_download/{pdf_file}', 'HiringController@download_pdf')->name('hiring.pdf_com_download');

Route::post('/docusign_delete', 'HiringController@delete')->name('hiring.doc_delete');
// Doc Print
Route::get('/doc_send_print', 'HiringController@doc_send_print')->name('hiring.doc_send_print');
// Upload pdf
Route::get('/upload_pdf/{id}', 'HiringController@upload_pdf')->name('hiring.upload_pdf');
Route::post('/upload_com_pdf', 'HiringController@upload_com_pdf')->name('hiring.upload_com_pdf');

// Scheduling Route
Route::get('/datatable', 'DataTableController@index');
Route::get('/pptx', function () {
    return view('public.Scheduling.ppt');
});
Route::get('schedule_data/get_data', 'DataTableGetController@index')->name('schedule_data.getdata');
Route::post('/schedule_add', 'DataTableController@schedule_add')->name('schedule.add');
Route::post('/schedule_update', 'DataTableController@schedule_update')->name('schedule.update');
Route::post('/schedule_delete', 'DataTableController@schedule_delete')->name('schedule.delete');
Route::resource('schedules', 'DataTableController');


Route::get('/', 'AspectHomeController@index')->name('aspect.home');
Route::get('/pricing', 'AspectHomeController@pricing')->name('aspect.pricing');
Route::get('/aboutus', 'AspectHomeController@aboutus')->name('aspect.aboutus');
Route::get('/services', 'AspectHomeController@services')->name('aspect.services');
Route::get('/blog', 'AspectHomeController@blog')->name('aspect.blog');
Route::get('/contactus', 'AspectHomeController@contactus')->name('aspect.contactus');
Route::get('/getquote', 'AspectHomeController@getquote')->name('aspect.getquote');

// Route::get('/donate', 'CheckoutController@index')->name('donate');
Route::get('get-video/{id}', 'AspectHomeController@getVideo')->name('getVideo');


Route::get('/all-aspects', 'AspectHomeController@allAspects')->name('all-aspects');

Route::post('/aspect/{aspect}/donation', 'DonationsController@store')->name('aspect.donation');


Route::get('/cart/checkout/{id}', 'CheckoutController@check_index')->name('cart.check');
Route::post('/cart/{id}/proceed', 'CheckoutController@store')->name('cart.proceed');
// Route::get('/cart/payment/{cost}', 'CheckoutController@show')->name('cart.payment');
Route::post('/cart/checkout', 'CheckoutController@pay')->name('cart.checkout');
// End of cart route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Route group
Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin-home', 'Admin\AdminBaseController@index')->name('admin.home');

    Route::put('/admin/aspects/restore/{id}', 'Admin\AdminAspectsController@restore')
        ->name('aspect.restore');
    Route::delete('admin/aspects/forceDelete/{id}', 'Admin\AdminAspectsController@forceDelete')
        ->name('aspect.forceDelete');
    Route::get('/trash-aspects', 'Admin\AdminAspectsController@trashAspects')
        ->name('admin.trash-aspects');

    Route::resource('/admin/aspects', 'Admin\AdminAspectsController');
    Route::resource('/admin/users', 'Admin\AdminUsersController');
    Route::resource('/admin/donations', 'Admin\AdminDonationsController');
});
// End of admin route

// Users route group
Route::group(['middleware' => 'user'], function (){
    Route::get('/user-home', 'Users\UsersBaseController@index')->name('user.home');

    Route::get('/my-donations', 'Users\UserDonationsController@myDonations')->name('user.donations');
    Route::delete('/donation-delete/{id}', 'Users\UserDonationsController@deleteDonation')->name('donation.delete');
});
// End of users route

Route::get('/logout', 'CustomLogoutController@logout')->name('logout');

// Paypal route
Route::get('payment/{cost}', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


//Contact Route
Route::post('/email/send', 'EmailController@sendEmail')->name('email.send');