<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'];

    public function movie(): BelongsTo {
        return $this->belongsTo(Movie::class);
    }

    // commented because im not sure what to do about the default laravel User model
    // public function user(): BelongsTo {
    //     return $this->belongsTo(User::class);
    // }
}
