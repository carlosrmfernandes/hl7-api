<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{

    public $table = "hospitals";
    protected $fillable = [
        'hospital'
    ];

    function services()
    {
        return $this->hasMany('App\Models\Service', 'hospital_id');
    }

    public function rules($id)
    {
        return([
            'hospital' => 'required|unique:hospitals,hospital' . ($id == null ? '' : ',' . $id),
        ]);
    }

}
