<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $guraded=[];
  protected  $fillable =[ 'id','title', 'description', 'image','user_id','category_id'];

  public function tags(){
    return $this->belongsToMany('App\Models\tag');

  }

    public function user(){
      return $this->belongsTo('App\Models\User');
}

public function category(){
  return $this->belongsTo('App\Models\category');
}

public function comments(){
  return $this->morphMany('App\Models\Comment','Commentable');


}
public function getTagsIdArray(){
  $id_array=[];
  
  if(count($this->tags)){

   foreach ($this->tags as $tag) {
    $id_array[]=$tag->id;
   }

  }

  return $id_array;
 }
}
