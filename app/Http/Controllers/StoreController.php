<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StoreController extends Controller {

	public function index()
    {
        $pFeatured = Product::featured()->limit(3)->get();
        $pRecommended = Product::recommended()->limit(3)->get();
        $categories = Category::all();
        return view('store.index', compact('categories' , 'pFeatured', 'pRecommended'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = Product::ofCategory($id)->get();

        return view('store.category', compact('categories', 'products', 'category'));
    }

    public function product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('store.product', compact('categories', 'product'));
    }

}
