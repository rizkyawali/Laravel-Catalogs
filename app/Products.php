<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Files;

class Products extends Model
{

    protected $table = 'products';

    protected $fillable = ['name',
        'description',
        'price',
        'image_path',
        'image_extension'];

    public static function valid()
    {
        return array('content' => 'required');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments', 'product_id');
    }
}
