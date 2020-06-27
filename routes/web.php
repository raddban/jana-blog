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

// Admin routes
Route::get('/admin-login', [
    'uses' => 'Admin\HomeController@index',
    'as' => 'admin.home',
    'middleware' => ['auth']
]);
Route::get('/admin-recipes', [
   'uses' => 'Admin\RecipeController@getRecipes',
   'as' => 'admin.recipes',
    'middleware' => ['auth']
]);
Route::get('/admin-add-new-recipe',[
    'uses' => 'Admin\RecipeController@addNewRecipe',
    'as' => 'admin.add.new.recipe',
    'middleware' => ['auth']
]);
Route::get('/admin-blog', [
   'uses' => 'Admin\BlogController@index',
   'as' => 'admin.blog',
    'middleware' => ['auth']
]);
Route::get('/admin-contacts', [
    'uses' => 'Admin\ContactsController@index',
    'as' => 'admin.contacts',
    'middleware' => ['auth']
]);
Route::post('/admin-save-contacts', [
    'uses' => 'Admin\ContactsController@save',
    'as' => 'admin.save.contacts',
    'middleware' => ['auth']
]);
Route::get('/admin-messages', [
    'uses' => 'Admin\MessageController@index',
    'as' => 'admin.messages',
    'middleware' => ['auth']
]);
Route::get('/admin-read-mail/{id}', [
    'uses' => 'Admin\MessageController@readMail',
    'as' => 'admin.read.mail',
    'middleware' => ['auth']
]);
Route::get('/admin-categories', [
   'uses' => 'Admin\CategoriesController@index',
   'as' => 'admin.categories',
   'middleware' => ['auth']
]);
Route::get('/admin-add-new-category', [
    'uses' => 'Admin\CategoriesController@addNewCategory',
    'as' => 'admin.add.new.category',
    'middleware' => ['auth']
]);
Route::post('/admin-new-category', [
    'uses' => 'Admin\CategoriesController@saveNewCategory',
    'as' => 'admin.save.category',
    'middleware' => ['auth']
]);


Auth::routes();

// User
Route::get('/', [
    'uses' => 'User\HomeController@index',
    'as' => 'user.home'
]);
Route::get('/user-contacts', [
    'uses' => 'User\ContactsController@index',
    'as' => 'user.contacts'
]);
Route::post('/user-send-message', [
   'uses' => 'User\ContactsController@sendMessage',
   'as' => 'user.send.message'
]);
