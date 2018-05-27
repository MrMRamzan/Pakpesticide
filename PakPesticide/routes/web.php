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
Route::get('/', function () {

	$data=['std1'=>['name'=>'Ali','marks'=>'80'],
                 'std2'=>['name'=>'Adnan','marks'=>'90'],
            ];
	//$users = DB::select('select * from users where name like ?',['A%']);
    return view('home1');

    
});
// Route::get('home1', function () {
// 	//$users = DB::select('select * from users where name like ?',['A%']);
// 	 $data=['std1'=>['name'=>'Ali','marks'=>'80'],
//                 'std2'=>['name'=>'Adnan','marks'=>'90']
//             ]
//     return view('home1', ['data' => $data]);
//     //return view('home');
// });
Route::get('msg','myController@showMsg');
// for name acess from database
Route::get('name','myController@index');
// about view
Route::get('about','myController@aboutPage');
// ourteam view
Route::get('ourteam','myController@ourTeamPage');
// crops view
Route::get('crops','myController@cropPage');
// product view
Route::get('products','myController@productPage');
// contact view
Route::get('contact','myController@contactPage');
// cart view
Route::get('cart','myController@cartPage');
// selectedCrops view
Route::get('selectedCrop','myController@selectedCropPage');
// order view
Route::get('order','myController@orderPage');

// admin view
Route::get('admin','dashController@adminPage');
Route::get('data','myController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
