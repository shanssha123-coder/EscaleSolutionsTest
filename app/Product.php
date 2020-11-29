<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
            
    protected $table = 'products';
    protected $fillable = ['user_id','business_id','name', 'mrp','discription'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function business()
    {
        return $this->belongsTo('App\Business', 'business_id');
    }

};