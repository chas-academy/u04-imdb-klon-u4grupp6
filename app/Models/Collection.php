<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function movies(): BelongsToMany {
        return $this->belongsToMany(Movie::class);
    }
}
