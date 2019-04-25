<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expression extends Model
{
    protected $table = "Expression";
    protected $primaryKey = "ExpressionId";
    public $timestamps = false;
}
