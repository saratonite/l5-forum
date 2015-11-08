<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table ='answers';

    protected $fillable = ['answer'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
