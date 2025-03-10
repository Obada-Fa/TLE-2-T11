<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function signs(): HasMany
    {
        return $this->hasMany(Sign::class);
    }
    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }
}
