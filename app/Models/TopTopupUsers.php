<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopTopupUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'count',
    ];
}