<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{

    private $categories;

    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function index($id = null)
    {
        if (!$id) {
            $categories = $this->categories->all();

            if (count($categories) == 0)
                echo "Não existe categoria cadastrado!";

            foreach ($categories as $category):
                echo $category->name . '</br>';
            endforeach;

        } else {
            $categories = $this->categories->find($id);
            if (count($categories) > 0)
                echo $categories->name;
            else
                echo "Não existe esta categoria!";
        }

    }


}
