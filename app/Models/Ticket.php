<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Ticket extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'status',
        'title',
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
