<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class, 'id', 'subscription_id');
    }
}
