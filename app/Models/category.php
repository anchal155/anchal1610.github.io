<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
        protected $guarded=[];

        protected $fillable=['id','name'];

        public function tags(){
            return $this->belongsToMany('App\Models\tag');
        }
}
