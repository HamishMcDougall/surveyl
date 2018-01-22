<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


      public function Status()
      {
        return $this->belongsTo('App\Status');
      }
}
