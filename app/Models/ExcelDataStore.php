<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelDataStore extends Model
{
    use HasFactory;
    protected $table="excelimportdata";
    
    protected $fillable = [
        'full_name',
        'email',
        'date',
    ];

}
