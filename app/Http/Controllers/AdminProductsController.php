<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

class AdminProductsController extends Controller {

    private $products;

    public function __construct(Product $product)
    {
        $this->products = $product;
    }
	public function index()
	{

        $products = $this->products->all();

        if(count($products) == 0)
            echo "Não existe produto cadastrado!";

        foreach($products as $product):
            echo $product->name . '</br>';
        endforeach;

	}



}
