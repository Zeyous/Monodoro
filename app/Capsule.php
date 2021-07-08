<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Capsule extends Model
{
    
        protected $fillable = [
     
            'start', 'end', 'user_id', 'stop',
     
        ];
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'created_at', 'updated_at',
        ];
    
    
    
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
    }

