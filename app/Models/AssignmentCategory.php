<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class AssignmentCategory extends Model
{
    use HasFactory;

    protected $table = 'assignment_category';

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
