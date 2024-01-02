<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Subject as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Subject extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'title',
        'lecturer_id',
    ];

    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }
}