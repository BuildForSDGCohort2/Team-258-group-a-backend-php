<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
	
	protected $table = 'socialmedia';
	
	protected $fillable = [
        'websiteurl', 'facebookurl', 'twitterurl',
        'instagramurl', 'linkedinurl',
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
