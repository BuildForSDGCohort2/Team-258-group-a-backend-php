<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'name',
        'file_path',
    ];
	
	protected $casts = [
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
    'date_of_birth' => 'datetime:d-m-Y',
];
}
