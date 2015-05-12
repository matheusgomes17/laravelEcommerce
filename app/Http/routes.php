<?php

Route::get('', function(){
  return view('home');
});


Route::group(['prefix' => 'admin', 'where' => ['id' => '[0-9]+']],  function()
{
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/delete', array(
        'as' => 'categories.delete',
        'uses' => 'CategoriesController@destroy'
    ));
    Route::resource('products', 'ProductsController');
    Route::get('products/{id}/delete', array(
        'as' => 'products.delete',
        'uses' => 'ProductsController@destroy'
    ));
});


