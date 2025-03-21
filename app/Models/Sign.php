<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Sign extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
        'category_id',
    ];


    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }
    public function assignmentResults(): HasMany
    {
        return $this->hasMany(AssignmentResult::class);
    }
}
