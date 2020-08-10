<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name 
    protected $table ='posts';
    // primary key 
    public $primarykey ='id';
    //
    public $timestamps = true;

}
