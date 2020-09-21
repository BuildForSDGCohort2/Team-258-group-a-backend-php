<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'initials', 'surname', 'first_name',
        'preferred_name', 'citizenship', 
        'date_of_birth', 'gender', 'marital_status',
        'home_language', 'other_language', 'own_transport',
    ];
	
	protected $casts = [
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
    'date_of_birth' => 'datetime:d-m-Y',
];
}
