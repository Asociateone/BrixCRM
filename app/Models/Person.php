<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'actions_blocked',
    ];

    public function subscriptions(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}
