<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable =[
        'training_number','training_name','training_description','training_video',
        'training_duration','training_iterations','training_group_id'
    ];

    public function training_group(){

       return $this->belongsTo(Training_Group::class,'training_group_id','id');
    }
}
