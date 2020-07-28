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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tests.test1s', 'Test1Controller');
// Route::get('/checkingtable',function(){
// 	if(Schema::hasTable('photoss'))
// 	{
// 		return 'hihi';
// 	}else{
// 		return 'huhu';
// 	}
Route::view('alert','components.alert');
// });

// Route::get('/checkingcolumn',function(){
// 	if(Schema::hasColumn('photos','id')){
// 		return 'co cot id';
// 	}else{
// 		return 'khong co cot id';
// 	}
// });

// Route::get('rename',function(){
// 	Schema::rename('albums','photos');
// });

// Route::get('dropcolumn',function(){
// 	Schema::table('photos', function($table){
// 		$table->dropColumn('title');
// 	});
// });

// Route::get('addcolum',function(){
// 	Schema::table('photos', function($table){
// 		$table->string('title')->nullable();
// 	});
// });

// Route::get('changecolumn',function(){
// 	Schema::table('photos',function($table){
// 		$table->string('title', 50)->change();
// 	});
// });

// Route::get('renamecolumn',function(){
// 	Schema::table('photos',function($table){
// 		$table->renameColumn('title','script');
// 	});
// });

// Route::get('createIndex',function(){
// 	Schema::table('photos',function($table){
// 		$table->unique('script');
// 	});
// });

// Route::get('dropIndex',function(){
// 	Schema::table('photos',function($table){
// 		$table->dropUnique('photos_script_unique');
// 	});
// });

// Route::get('createforeign',function(){
// 	Schema::table('photos',function($table){
// 		$table->integer('album_id');

// 		$table->foreign('album_id')->references('id')->on('albums');
// 	});
// });

// Route::get('dropforeign',function(){
// 	Schema::table('photos',function($table){
// 		$table->dropForeign(['albums_id']);
// 	});
// });

// Route::get('value',function(){
// 	$a = DB::table('photos')->where('id',3)->value('script');
// 	return $a;
// });

// Route::get('pluck',function(){
// 	$a = DB::table('photos')->pluck('script');
// 	return $a;
// });

// Route::get('getAlbumfromUser',function(){
// 	$a = App\User::find(2)->albums()->get()->toArray();
// 	echo "<pre>";
// 	print_r($a);
// 	echo "</pre>";
// });

// Route::get('getUserfromAlbum',function(){
// 	$a = App\Album::find(4)->user()->get()->toArray();
// 	echo "<pre>";
// 	print_r($a);
// 	echo "</pre>";
// });

// Route::get('getAlbumfromPhoto',function(){
// 	$a = App\Photo::find(4)->album()->get()->toArray();
// 	echo "<pre>";
// 	print_r($a);
// 	echo "</pre>";
// });

// Route::get('getPhotofromAlbum',function(){
// 	$a = App\Album::find(4)->photo()->get()->toArray();
// 	echo "<pre>";
// 	print_r($a);
// 	echo "</pre>";
// });

// Route::get('getPhotofromUser',function(){
// 	$a = App\User::find(1);
// 	$a->photos()->attach('3');
// 	$a = App\User::find(4)->photos()->get()->toArray();
// 	echo "<pre>";
// 	print_r($a);
// 	echo "</pre>";
// });

Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('postInfo', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logout');
Route::get('register','AuthController@getRegister');
Route::post('register','AuthController@setRegister');

Route::get('signup',function(){
	return view('signup');
})->name('signup');

Route::view('indexPage','Feeds');

Route::view('Feeds_Photo','Feeds_Photo');
Route::view('Feeds_Album','Feeds_Album');

Route::view('MyPhoto','MyPhoto');
Route::view('AddPhoto','AddPhoto');
Route::view('AddAlbum','AddAlbum');

Route::middleware(['auth'])->group(function(){
	Route::get('Feeds_Photo','PhotoController@index');
	Route::get('MyPhoto/{id}','PhotoController@show');
	Route::get('MyAlbum/{id}','AlbumController@show');
	Route::get('Manage','AdminController@manageUsers')->name('Manage_User');
	Route::get('Manage_Photo','AdminController@managePhotos')->name('Manage_Photo');
	Route::get('Manage_Album','AdminController@manageAlbums')->name('Manage_Album');
	Route::post('AddPhoto/{id}','PhotoController@store');
	Route::post('AddAlbum/{id}','AlbumController@store');
	Route::get('EditImage/{id}','PhotoController@edit');
	Route::get('EditAlbum/{id}','AlbumController@edit');
	Route::get('EditUser/{id}','UserController@edit');
	Route::post('UpdateImage/{id}/{link}/{img}','PhotoController@update');
	Route::post('UpdateAlbum/{id}/{link}/{img}','AlbumController@update');
	Route::post('UpdateUser/{id}','UserController@update');
	Route::get('DeleteImage/{id}','PhotoController@destroy')->name('DeleteImage');
	Route::get('DeleteAlbum/{id}','AlbumController@destroy');
	Route::get('DeleteUser/{id}','UserController@destroy');
});



Route::get('Feeds_Album','AlbumController@index');
Route::get('Feeds_Album/{id?}','AlbumController@show');




//anh ma nguoi dung luu vao se duoc luu trong storage.app.public minh co the tao mot thu muc chua thong tin anh o day. 


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//route photo
//Route::get('ShowPhoto', 'PhotoController@index');