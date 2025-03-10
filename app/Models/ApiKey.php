<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'key', 'name', 'active'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
