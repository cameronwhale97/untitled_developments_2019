<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Define the table name for this model to use
    protected $table = "Portfolio";
    
    // Tell Laravel the name of the primary key field
    protected $primaryKey = "PortfolioId";
    
    public $timestamps = false;
}
