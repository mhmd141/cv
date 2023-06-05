<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    use HasFactory;
    
    
    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
