<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pm_order extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    protected $table = 'pm_order'; 
    protected $primaryKey = 'order';
    public $timestamps = false; 
}
