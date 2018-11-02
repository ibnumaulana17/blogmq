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

// Route::post('sql', function () {
// 	$data = \DB::select("SELECT sum(estimates.hour) FROM scrums

// INNER JOIN urgencies ON scrums.urgency_id = urgencies.id
// INNER JOIN projects ON scrums.project_id = projects.id
// INNER JOIN scrum_types ON scrums.scrum_type_id = scrum_types.id
// INNER JOIN estimates ON scrums.estimate_id = estimates.id
// INNER JOIN transactions ON scrums.id = transactions.scrum_id
// INNER JOIN staffs ON transactions.developer_id = staffs.id

// WHERE staffs.email='akbar@gmail.com' AND YEARWEEK(`finish_time`)=YEARWEEK(NOW())");

// 	return \Response::json([
// 		'result' => '1',
// 		'data' => $data
// 		]);
// });
use App\RouteList;

// Route::group(['middleware' => 'prevent-back-history'],function(){

Auth::routes();
Route::get('/', function () {
    return redirect('login');
});




// Users
Route::get('/users/list', 'users\controller\userController@listUsers')->name("list_users");
Route::get('/users/delete/{id}', 'users\controller\userController@deleteUsers')->name("delete_users");

Route::get('/users/add', 'users\controller\userController@create')->name("add_users");
Route::post('/users/insert', 'users\controller\userController@store')->name("insert_users");

Route::get('/users/edit/{id}', 'users\controller\userController@edit')->name("edit_users");
Route::post('/users/{id}', 'users\controller\userController@update')->name("update_users");




// Jurusan
Route::get('/Jurusan/list', 'Jurusan\controller\jurusanController@index')->name("list_jurusan");
Route::get('/jurusan/delete/{id}', 'Jurusan\controller\jurusanController@destroy')->name("delete_jurusan");

Route::get('/jurusan/add', 'Jurusan\controller\jurusanController@create')->name("add_jurusan");
Route::post('/jurusan/insert', 'Jurusan\controller\jurusanController@store')->name("insert_jurusan");

Route::get('/jurusan/edit/{id}', 'Jurusan\controller\jurusanController@edit')->name("edit_jurusan");
Route::post('/jurusan/update/{id}', 'Jurusan\controller\jurusanController@update')->name("update_jurusan");



// SCRUM PROJECT





// ESTIMATE


// DIVISION



// TRACKING




// URGENCY




// Staff Role



// REPORT
// Route::get('/web', 'data\controller\dataController@divisionperweek')->name("web");








Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/loginapi', 'users\controller\userController@index')->name('index_login');
// Route::post('/loginapi', 'users\controller\userController@authenticate')->name('loginapi');






// Route::get('connect', function () {
//     $http = new GuzzleHttp\Client;

//     $response = $http->post(url("").'/oauth/token', [
//         'form_params' => [
//             'grant_type' => 'password',
//             'client_id' => Illuminate\Support\Facades\Input::get('client_id'),
//             'client_secret' => Illuminate\Support\Facades\Input::get('client_secret'),
//             'username' => Illuminate\Support\Facades\Input::get('username'),
//             'password' => Illuminate\Support\Facades\Input::get('password'),
//             'scope' => '',
//         ],
//     ]);

//     return [
//     'token' => json_decode((string) $response->getBody(), true),
//     'data' => Illuminate\Support\Facades\Input::all()];
//     // 'user' => \App\Models\staffsModel::where('username', Illuminate\Support\Facades\Input::get('username'))->with()->first()];
//     return json_decode((string) $response->getBody(), true);
// });

Route::get('roles',function(){
	$data = Route::getRoutes();
	foreach ($data as $index => $value) {
		# code...
		$exist = RouteList::where('route_name','=',$value->getName())->count();
		if ($exist == 0){
			if ($value->getName() != ""){
				$save = new RouteList;
				$save->route_name = $value->getName();
				$save->description = $value->getName();
				$save->modul = $value->getName();
				$save->status = 1;
				$save->save();
			}
		}
		// return "Route List Has been Updated";
	}
});
// });