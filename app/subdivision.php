<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subdivision extends Model
{    
    protected $fillable = [
       'id_subdivision'
      ];
    public function division(){
        return $this->belongsTo(Division::class);
    }
}
