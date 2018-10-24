<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders()
    {
      return $this->belongsToMany('App\Order');
    }
    public function cat()
    {
      return $this->belongsTo('App\Cat');
    }
    public function users()
    {
      return $this->belongsToMany('App\User');
    }

}
