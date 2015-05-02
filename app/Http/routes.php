<?php

Route::get('/', 'WelcomeController@index');
Route::get('exemplo', 'WelcomeController@exemplo');

Route::group(['prefix' => 'admin'], function()
{
    Route::get('product/{id?}', ['as' => 'produtos','uses' => 'AdminProductsController@index', function($id = null){}]);
    Route::get('category/{id?}', ['as' => 'categorias','uses' => 'AdminCategoriesController@index', function($id = null){}]);
});


Route::get('user/{id?}', function($id = null){
    if($id)
         return "Olá $id";
    else
        return "Não possui id";
});