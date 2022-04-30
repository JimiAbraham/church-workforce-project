<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polls_count extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'poll_id',
        'vote1',
    
    ];
}
