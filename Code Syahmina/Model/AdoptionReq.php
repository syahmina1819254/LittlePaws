<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionReq extends Model
{
    use HasFactory;
    protected $table='adoption_Reqs';
    protected $fillable=['UserID','adoptID','petID','reqDate','reqStatus'];

    public function pet(){

        return $this->hasMany('pet');
    }
}
