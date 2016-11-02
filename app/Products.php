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
}
