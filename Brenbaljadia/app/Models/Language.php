<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    protected $fillable = [
        'profile_id',  'language'
    ];

    public function language()
    {
        return $this->belongsTo(Profile::class);
    }
}