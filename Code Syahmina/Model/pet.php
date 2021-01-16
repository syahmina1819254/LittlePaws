<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    protected $table='pet_adoptions';
    

    public function adoptionReq(){

        return $this->belongsTo('pet_adoptions');
    }
}
