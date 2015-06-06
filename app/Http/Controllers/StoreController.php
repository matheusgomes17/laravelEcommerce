<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StoreController extends Controller {

	public function index()
    {
        $pfeatured = Product::featured()->limit(3)->get();
        $categories = Category::all();
        return view('store.index', compact('categories' , 'pfeatured'));
    }

}
