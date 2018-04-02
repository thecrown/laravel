<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // protected $table = 'post';
    // protected $primarykey = 'id';
    public $table = "post";
    protected $fillable = [
    	'title','body','user_id'
    ];
}
