<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintGrooming extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'meeting_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
