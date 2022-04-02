<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscription extends Model
{
    use HasFactory;

    protected $variable = [
        'phone_number',
        'active',
        'person_id'
    ];

    public function person(): HasMany
    {
        return $this->hasMany(Person::class, 'id', 'person_id');
    }
}
