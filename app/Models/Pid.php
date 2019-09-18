<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pid extends Model
{

    protected $table = 'pid';
    protected $fillable = [''];

    public function msh()
    {
        return $this->hasMany("App\Models\Msh", "pid_id");
    }

    public function evn()
    {
        return $this->hasMany("App\Models\Evn", "pid_id");
    }

    public function nte()
    {
        return $this->hasMany("App\Models\Nte", "pid_id");
    }
    public function obr()
    {
        return $this->hasMany("App\Models\Obr", "pid_id");
    }

}
