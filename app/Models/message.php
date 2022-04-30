<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'media',
        'path',
    ];

    public function users()
    {
        $this->BelongsTo(user::class);
    }
}
