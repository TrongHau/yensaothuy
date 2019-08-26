<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Backpack\CRUD\CrudTrait;

class HomeSliderShow1Model extends Model
{
    use CrudTrait;
    public $timestamps = false;
    protected $table = 'home_slider_show1';
    protected $primaryKey = 'id';
    protected $fillable = ['title_1', 'title_2', 'title_3', 'image', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Models\ProductModel', 'product_id');
    }
}
