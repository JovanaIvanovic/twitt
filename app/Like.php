<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function parent(){
        return $this->belongsTo(ThreadParent::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
