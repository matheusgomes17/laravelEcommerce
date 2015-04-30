<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller {

    private $categories;

    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

	public function index()
	{
        $categories = $this->categories->all();

        if(count($categories) == 0)
            echo "Não existe categoria cadastrado!";

        foreach($categories as $category):
            echo $category->name . '</br>';
        endforeach;

    }



}
