<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'tbluser';

    protected $fillable = ['username', 'password', 'jobid'];

        public $timestamps = false;
        protected $primaryKey = 'userid';
        protected $hidden = ['password'];
}
