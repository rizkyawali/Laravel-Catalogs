<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Files;

class Products extends Model
{
    public function file()
    {
        return $this->belongsTo('App\Files');
    }
}
