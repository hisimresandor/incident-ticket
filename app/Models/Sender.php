<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Builder
 */

class Sender extends Model
{
    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    protected $fillable = [
        'name',
        'email',
    ];

    use HasFactory;
}
