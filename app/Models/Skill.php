<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
	
	//table columns that can be filled by the user
	protected $fillable = [
        'skill_array', 'personaldetails_id',
        
    ];
	
	protected $casts = [
	'skill_array' => 'array',
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
];
}
