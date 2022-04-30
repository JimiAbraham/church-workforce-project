<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'status',
    
    ];


    public function pollCount()
    {
        $this->hasMany(poll_count::class);
    }

}
