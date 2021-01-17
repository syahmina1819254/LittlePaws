<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    protected $table='pet_adoptions';
    protected $fillable=['petID','Age','petName','petType','pet_image'];
    protected $primaryKey = 'petID';
    

    public function adoptionReq(){

        return $this->belongsTo('pet_adoptions');
    }
}
