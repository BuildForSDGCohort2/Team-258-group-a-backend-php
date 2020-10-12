<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'home_language', 'other_language', 'personaldetails_id', 
    ];
	
	protected $casts = [
	'home_language' => 'array',
    'other_language' => 'array',
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
];
}
