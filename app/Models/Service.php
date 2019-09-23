<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = "services";
    
    protected $fillable = [
        'service',
        'status',
        'hospital_id'
    ];
    
    public function hospital(){
       return $this->belongsTo('App\Models\Hospital', 'hospital_id');
    }

}
