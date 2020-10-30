<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
	
	protected $table = 'contactinfos';
	
	protected $fillable = [
        'position', 'contact_person', 'phone_number_1',
        'primary_email', 
    ];
	
	protected $casts = [
       'created_at' => 'datetime:d-m-Y H:i:s',
       'updated_at' => 'datetime:d-m-Y H:i:s',
    ];
	
	public function jobseeker()
    {
        return $this->belongsTo('App\Models\Jobseeker');
    }
}
