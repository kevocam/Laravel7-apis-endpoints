<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    protected $fillable = [
        'nombre', 'embajador', 'integrantes', 'div_sup'
      ];
    function subdivision(){
      return $this->hasMany(subdivision::class);
    }
}
