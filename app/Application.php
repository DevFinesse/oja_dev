<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
   public function user ()
    	{
            return $this->belongsTo('App\User');
        }

    public function job()
    {
    	return $this->belongsTo('App\Job');
    }
    
}
