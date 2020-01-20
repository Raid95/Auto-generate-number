<?php
//use Keygen;
//use App\User;
//use App\Models\User;

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
/*
Route::group(['prefix' => 'api'], function() {
    Route::get('/users', 'ApiController@showAllUsers');
    Route::post('/users', 'ApiController@createNewUser');
    Route::get('/user/{id}', 'ApiController@showOneUser');
  
}); */

/*
Route::get('/', function () {
    $user = new User;
    // Generate unique ID
    $user->id = $this->generateID();
    return User::create([
        'name' => 'Jane',
        'email' => 'john@jane.com',
        'password' => ('password'),
    ]);
    }); */
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
