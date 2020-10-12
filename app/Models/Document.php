<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'profile_picture', 'identity_document',
        'qualification', 'personaldetails_id',
    ];
	
	protected $casts = [
	'profile_picture' => 'array',
    'identity_document' => 'array',
    'qualification' => 'array',
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
];
}
