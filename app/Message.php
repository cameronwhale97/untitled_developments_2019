<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "Mail";
    protected $primaryKey = "MailId";
    public $timestamps = false;
}
