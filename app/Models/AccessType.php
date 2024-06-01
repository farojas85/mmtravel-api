<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccessType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'is_active'
    ];

    /**
     * Get all of the roles for the AccessType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}
