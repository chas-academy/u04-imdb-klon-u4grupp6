<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'genre', 'release'];

    public function reviews(): HasMany {
        return $this->hasMany(Review::class);
    }

    public function collections(): BelongsToMany {
        return $this->belongsToMany(Collection::class);
    }
}
