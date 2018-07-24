<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   public function user()
   {
   	return $this->belongsTo('App\User');
   }

   public function application()
   {
   	return $this->hasMany('App\Application', 'job_id');
   }

}
