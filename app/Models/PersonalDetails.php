<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
	
	protected $table = 'personaldetails';
	
	protected $fillable = [
        'initials', 'surname', 'first_name', 'second_name',
        'social_security','preferred_name', 'citizenship', 
        'date_of_birth', 'gender', 'marital_status',
        'own_transport', 'passport_number', 'password', 
    ];
	
	protected $casts = [
       'created_at' => 'datetime:d-m-Y H:i:s',
       'updated_at' => 'datetime:d-m-Y H:i:s',
       'date_of_birth' => 'datetime:d-m-Y H:i:s',
    ];
	
	public function setPasswordAttribute ($password)
	{
		$this->attributes['password'] = bcrypt($password);
	}
	
	/*public function jobseeker()
    {
        return $this->belongsTo('App\Models\Jobseeker');
    }*/
}
