<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table ="questions";

    protected $fillable = ['title','content'];
    protected $dates = ['deleted_at'];

    use SoftDeletes;

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function answers(){
    	return $this->hasMany('App\Answer','question_id');
    }

}
