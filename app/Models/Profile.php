<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    // Define the attributes that are mass assignable
    //protected $fillable = ['name', 'age', 'email', 'address','user_id'];
    
    // Define the attributes that are not mass assignable
    protected $guarded = ['id'];
    // Specify the table associated with this model
    protected $table = 'profiles';

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
   
    // Disable timestamps for this model
    //public $timestamps = false;
    // Create a one-to-many relationship with the User model

    


}
