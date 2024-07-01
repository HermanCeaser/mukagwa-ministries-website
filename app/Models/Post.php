<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, HasUlids, SoftDeletes;


    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime:Y-m-d',
            'deleted_at' => 'datetime:Y-m-d',
        ];
    }


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorable');
    }

    public function getTagsAttribute(): string
    {
        $categories = $this->categories->pluck('name')->toArray();
        $tags = array_map(fn ($category) => "#{$category}", $categories);
        return implode(', ', $tags);
    }
}
