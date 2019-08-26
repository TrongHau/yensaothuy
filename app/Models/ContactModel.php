<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ContactModel extends Model
{
    use CrudTrait;
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'phone', 'body_content'];
}
