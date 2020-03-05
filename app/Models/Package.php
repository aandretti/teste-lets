<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tracking_code',
        'cep',
        'street',
        'number',
        'addition',
        'district',
        'state',
        'city',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
