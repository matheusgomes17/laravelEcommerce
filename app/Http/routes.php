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

    Route::group(['prefix' => 'images'], function(){
        //site.com.br/admin/products/images/{id}/product
        Route::get('{id}/product', ['as' => 'product.images', 'uses' => 'ProductsController@images']);
        Route::get('create/{id}/product', ['as' => 'product.images.create', 'uses' => 'ProductsController@createImage']);
        Route::post('store/{id}/product', ['as' => 'product.images.store', 'uses' => 'ProductsController@storeImage']);
        Route::get('destroy/{id}/image', ['as' => 'product.images.destroy', 'uses' => 'ProductsController@destroyImage']);
    });

});


