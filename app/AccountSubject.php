<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AccountSubject extends Model
{
    use Traits\HasCompositePrimaryKey;
    public $incrementing = false;
    protected $table = "AccountSubject";
    protected $primaryKey = ['AccountId', 'SubjectId'];
    public $timestamps = false;
}
