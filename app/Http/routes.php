<?php

Route::get('/', 'WelcomeController@index');
Route::get('exemplo', 'WelcomeController@exemplo');

Route::group(['prefix' => 'admin'], function()
{
   Route::get('categories', 'AdminCategoriesController@index');
   Route::get('products', 'AdminProductsController@index');
});


