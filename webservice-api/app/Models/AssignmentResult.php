<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentResult extends Model
{
    //
    use HasFactory;

    public function signs(): BelongsTo
    {
        return $this->belongsTo(Sign::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
