<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdentityDocumentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'short_name', 'long_name', 'is_active'
    ];

    /**
     * Get all of the people for the IdentityDocumentType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}
