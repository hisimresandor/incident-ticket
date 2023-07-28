<?php

namespace App\Models;

use App\Models\Sender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    public function sender()
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
