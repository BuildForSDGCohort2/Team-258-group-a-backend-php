<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'address_line1', 'address_line2', 'city', 'province',
        'postal_code', 'personaldetails_id'
        
    ];
	
	protected $casts = [
       'created_at' => 'datetime:d-m-Y H:i:s',
       'updated_at' => 'datetime:d-m-Y H:i:s',
    ];
	

}
