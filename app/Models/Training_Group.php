<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_group_name'
    ];

    public function trainings(){

        return $this->hasMany(Training::class,'training_group_id','id');
    }
}
