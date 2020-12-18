<?php
/*
 * @Description:
 * @Version: 2.0
 * @Autor: Oyxiaoxi
 * @Date: 2020-12-17 13:47:37
 * @LastEditors: Oyxiaoxi
 * @LastEditTime: 2020-12-18 11:48:19
 */

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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
