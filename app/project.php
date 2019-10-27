<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function tasks()
    {
       return $this->hasMany(Task::class); 
    }
    
    
    
}
