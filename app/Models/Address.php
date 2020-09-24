<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'address_line1', 'city', 'province',
        'postal_code', 'citizenship', 
        'date_of_birth', 
    ];
	
	protected $casts = [
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
    'date_of_birth' => 'datetime:d-m-Y',
];
}
