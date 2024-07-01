<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'categorable');
    }

    public function causes()
    {
        return $this->morphedByMany(Cause::class, 'categorable');
    }

    public function Posts()
    {
        return $this->morphedByMany(Post::class, 'categorable');
    }
}
