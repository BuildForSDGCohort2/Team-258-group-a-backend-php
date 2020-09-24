<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'position', 'contact_person', 'phone_number_1',
        'primary_email', 
    ];
	
	protected $casts = [
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
    'date_of_birth' => 'datetime:d-m-Y',
];
}
