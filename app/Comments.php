<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['product_id','user','comment'];

    public static function valid()
    {
        return array('content' => 'required');
    }

    public function product()
    {
        return $this->belongsTo('App\Products', 'product_id');
    }
}
