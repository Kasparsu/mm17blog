<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @mixin \Eloquent */
    public function getBodyAttribute($value){
        return str_replace("\n", '<br>', $value);
    }

    public function getSnippetAttribute(){
        return substr($this->body, 0, 280);
    }
    public function getHumanDateAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
