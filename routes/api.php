<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->group(function () {
// Route::middleware('auth:api')->group(function () {
// Route::middleware('client')->group(function () {
    
 //    Route::get('/', function () {
 //    return redirect('login');
	// });

    // API LOGIN
    Route::post('/loginapi', 'staff\service\staffService@login')->name('check_login_api');
    Route::post('/loginvdua', 'staff\service\staffService@loginvdua')->name('loginvdua');

    //API Scrum Total dan Banner Image
    Route::post('/totalscrum-banner', 'staff\service\staffService@get_total_scrum_banner')->name('get_total_scrum_banner');


	//Route API Total
	Route::post('/scrum/total_estimate','scrum\service\scrumService@totalEstimate');
	Route::post('/scrum/total_dev','scrum\service\scrumService@totalEstimateDev');
	//ROUTE API by Status(analyst) 
	// Route::post('/scrum/list','scrum\service\scrumService@getbyStatus');

  Route::post('/scrum/list_table_master','scrum\service\scrumService@get_table_master');
	Route::post('/scrum/list_table_master_new','scrum\service\scrumService@get_table_master_new');


	//ROUTE API list All Data
	Route::post('/scrum/list','scrum\service\scrumService@getListAllData');
	Route::post('/scrum/update','scrum\service\scrumService@updateScrum');
	Route::post('/scrum/delete','scrum\service\scrumService@deleteScrum');
  Route::post('/scrum/insert', 'scrum\service\scrumService@store')->name("insert_scrumapi");

	//ROUTE API list Data On Progress
	//API PROJECT
    Route::post('/project/insert', 'project\service\projectService@store')->name("insert_projectapi");
  Route::post('/project/list', 'project\service\projectService@index')->name("list_projectapi");
  Route::post('/project/search', 'project\service\projectService@search')->name("search");
  Route::post('/filtercreatescrum', 'project\service\projectService@filtercreatescrum')->name("filtercreatescrum");


    
	/*	Route::post('/scrum/OnProgress','scrum\service\scrumService@getListAllData');*/


    Route::post('/staff/dev/web', 'staff\service\staffService@staffdevweb')->name("staff_dev_web");
  	Route::post('/staff/dev/mobile', 'staff\service\staffService@staffdevmob')->name("staff_dev_mobile");

  	Route::post('/scrum/take_scrum', 'scrum\service\scrumService@takescrumdev')->name("takescrum_dev");
  	Route::post('/scrum/finish', 'scrum\service\scrumService@finishprogress')->name("finish_progress");
  	Route::post('/scrum/revision', 'scrum\service\scrumService@revisionprogress')->name("revision_progress");
  	Route::post('/scrum/edit_status', 'scrum\service\scrumService@editStatusbyAnalist')->name("edit_status");

  	Route::post('/scrum/barcode', 'scrum\service\scrumService@barcode')->name("barcode");
  	Route::post('/scrum/scrumperweekhours', 'scrum\service\scrumService@scrumperweekhours')->name("scrumperweekhours");

  	Route::post('/scrum/scrumperweekdata', 'scrum\service\scrumService@scrumperweekdata')->name("scrumperweekdata");
  	Route::post('/scrum/scrumdeadline', 'scrum\service\scrumService@scrumdeadline')->name("scrumdeadline");
  	Route::post('/scrum/scrumhistorydata', 'scrum\service\scrumService@scrumhistorydata')->name("scrumhistorydata");
  	Route::post('/scrum/scrumhistoryhours', 'scrum\service\scrumService@scrumhistoryhours')->name("scrumhistoryhours");
    Route::post('/scrum/scrumallhoursperweek', 'scrum\service\scrumService@scrumallhoursperweek')->name("scrumallhoursperweek");
    Route::post('/scrummarket', 'scrum\service\scrumService@scrummarket')->name("scrummarket");

    Route::post('/filterscrummarket', 'scrum\service\scrumService@filterscrummarket')->name("filterscrummarket");

    Route::post('/filtermyscrumana', 'scrum\service\scrumService@filtermyscrumana')->name("filtermyscrumana");
    Route::post('/filtermyscrumdev', 'scrum\service\scrumService@filtermyscrumdev')->name("filtermyscrumdev");
    
    Route::post('/dashboardana', 'scrum\service\scrumService@dashboardana')->name("dashboardana");
    Route::post('/dashboarddev', 'scrum\service\scrumService@dashboarddev')->name("dashboarddev");
    
    Route::post('/historyana', 'scrum\service\scrumService@historyana')->name("historyana");
    Route::post('/historydev', 'scrum\service\scrumService@historydev')->name("historydev");

  	Route::post('/editprofile', 'staff\service\staffService@editprofile')->name("editprofile");



    Route::post('/linechart', 'linechart\service\linechartService@linechart')->name("linechart");
    Route::post('/linechart/spinner', 'linechart\service\linechartService@index')->name("/linechart/spinner");



    // API LIST ALL SCRUM
    // Route::post('/scrum/list', 'scrum\service\scrumService@index')->name("list_scrum_api");

	Auth::routes();

	// Route::get('/home', 'HomeController@index')->name('home');

	

	// Route::get('connect', function () {
 //    $http = new GuzzleHttp\Client;

 //    $response = $http->post(url("").'/oauth/token', [
 //        'form_params' => [
 //            'grant_type' => 'password',
 //            'client_id' => Illuminate\Support\Facades\Input::get('client_id'),
 //            'client_secret' => Illuminate\Support\Facades\Input::get('client_secret'),
 //            'username' => Illuminate\Support\Facades\Input::get('username'),
 //            'password' => Illuminate\Support\Facades\Input::get('password'),
 //            'scope' => '',
 //        ],
 //    ]);

 //    return ['authguga' => json_decode((string) $response->getBody(), true), 'user' => \App\Models\UsersModel::where('email', Illuminate\Support\Facades\Input::get('username'))->first()];
 //    return json_decode((string) $response->getBody(), true);
	


// });