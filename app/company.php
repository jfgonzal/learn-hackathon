<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public $table = "company";
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'name', 'partner'
    ];


}
