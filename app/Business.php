<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    protected $table = 'business';
    protected $fillable = ['user_id','name', 'eamil','registraion_no'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
