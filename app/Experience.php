<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = "Experience";
    protected $primaryKey = "ExperienceId";
    public $timestamps = false;
}
