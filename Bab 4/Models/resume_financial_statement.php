<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume_financial_statement extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $table = 'resume_financial_statement'; 
    protected $primaryKey = 'code_item';
    public $incrementing = false;
    public $timestamps = false; 

}
