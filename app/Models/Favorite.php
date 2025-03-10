<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'sign_id',
        'user_id',
        'is_correct'
    ];

    public function sign(): BelongsTo
    {
        return $this->belongsTo(Sign::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
