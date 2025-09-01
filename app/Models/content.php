<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;

    protected $fillable = [
        'keys', 'description', 'content'
    ];

    public function b2b()
    {
        return $this->belongsToMany(B2b::class);
    }
}
