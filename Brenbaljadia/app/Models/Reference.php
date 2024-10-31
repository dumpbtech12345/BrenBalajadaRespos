<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id', 'name' , 'age','profession','email','phone'
    ];

    public function references()
    {
        return $this->belongsTo(Profile::class);
    }
}

