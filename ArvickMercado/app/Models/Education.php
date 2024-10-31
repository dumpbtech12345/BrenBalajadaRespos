<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    protected $fillable = [
        'profile_id', 'level', 'school_name', 'years_attended', 'address'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}