<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Backpack\CRUD\CrudTrait;

class HomeSliderShow2Model extends Model
{
    use CrudTrait;
    public $timestamps = false;
    protected $table = 'home_slider_show2';
    protected $primaryKey = 'id';
    protected $fillable = ['title_1', 'title_2', 'image', 'product_id'];
    public function product()
    {
        return $this->belongsTo('App\Models\ProductModel', 'product_id');
    }
}
