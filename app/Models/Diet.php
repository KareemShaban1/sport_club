<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    protected $fillable = [
        'diet_name'
    ];

    public function meals(){

        return $this->hasMany(Meals::class,'diet_id','id');
    }

}
