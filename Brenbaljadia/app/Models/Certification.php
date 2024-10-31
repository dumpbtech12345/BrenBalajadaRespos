<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id', 'level', 'certification'
    ];

    public function certification()
    {
        return $this->belongsTo(Profile::class);
    }
}
