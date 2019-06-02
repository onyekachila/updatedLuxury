    <?php

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

// User Routes
Route::group(['namespace' => 'User'],function(){
    Route::get('/','HomeController@index');
});



//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');

    Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory')->name('addcategory');
    Route::match(['get','post','put'],'/admin/edit-category/{id}','CategoryController@editCategory')->name('editcategory');
    Route::match(['get','post', 'delete'],'/admin/delete-category/{id}','CategoryController@deleteCategory')->name('deletecategory');;
    Route::get('/admin/view-categories','CategoryController@viewCategories')->name('viewcategory');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/post', 'PagesController@getPost')->name('post');
Route::get('/contact', 'PagesController@getContact')->name('contact');



