<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'featured',
        'recommend'];

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

}
