<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	//add field bcauz of there is no timestamps added in our database table
    public $timestamps = false;
}
