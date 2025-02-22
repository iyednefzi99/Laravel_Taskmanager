<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taskmanager extends Model
{
    //
    protected $table = 'taskmanagers';
    
    protected $fillable = ['title', 'description', 'priority'];
    
}
