<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts';

    // Primary Key
    Public $PrimaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;

}
