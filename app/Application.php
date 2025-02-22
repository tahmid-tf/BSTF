<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(Application::class);
    }
}
