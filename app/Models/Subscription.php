<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'active',
        'person_id'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id', 'person_id');
    }
}
