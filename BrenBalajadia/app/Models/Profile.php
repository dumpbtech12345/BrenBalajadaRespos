<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'phone', 'email', 'facebook', 'instagram',
        'birthday', 'age', 'sex', 'mother', 'father', 'objective'
    ];

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function language()
    {
        return $this->hasMany(Language::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }
}
