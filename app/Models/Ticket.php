<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    public function sender(): BelongsTo
    {
        return $this->belongsTo(Sender::class);
    }

    protected $fillable = [
        'sender_id',
        'subject',
        'content',
        'due_date'
    ];

    use HasFactory;
}
