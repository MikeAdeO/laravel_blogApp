<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table Name
    protected $table = 'posts';

    //primary key
    public $primaryKey = 'id';

    //TimeStamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\user');
    }
    
}
