<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreiousSeaLevel extends Model
{
    use HasFactory;

    public $table = 'preious_sea_levels';

    protected $fillable=[
        'year',
        'sea_level'
    ] ;
}
