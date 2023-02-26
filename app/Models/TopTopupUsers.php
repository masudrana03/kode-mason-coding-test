<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopTopupUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'count',
    ];



    /**
     * Get the user that owns the TopTopupUsers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }
}