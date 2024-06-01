<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the people for the Gender
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}
