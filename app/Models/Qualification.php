<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
	protected $fillable = [
        'institution_attended', 'qualification_name', 
		'NQFlevel', 
        
    ];
	
	protected $casts = [
    'created_at' => 'datetime:d-m-Y',
    'updated_at' => 'datetime:d-m-Y',
    
    ];
}
