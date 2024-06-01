<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'identity_document_type_id', 'document_number',
        'first_name', 'paternal_surname', 'maternal_surname',
        'gender_id', 'number_phone', 'address'
    ];

    /**
     * Get the user associated with the Person
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
