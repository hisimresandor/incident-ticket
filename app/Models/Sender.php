<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin Builder
 */

class Sender extends Model
{
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    protected $fillable = [
        'name',
        'email',
    ];

    use HasFactory;
}
