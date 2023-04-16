<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','name','phone','subscription_number','email',
        'trainer_bio','birth_of_date','salary','height','weight',
        'nationality','gender','address'
    ];
}
  