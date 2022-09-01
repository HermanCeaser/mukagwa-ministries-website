<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photable');
    }


    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorable');
    }
}


