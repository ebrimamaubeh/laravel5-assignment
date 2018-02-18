<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'description', 'text', 'image_name'];


    public function user(){
    	return $this->belongsTo('App\User');
    }
}
